<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController {
    
    public function create()
    {
        return App::view('user_create', [
            'title' => 'New User',
        ]);
    }

    public static function nameValid(string $vardas)
    {
        if (strlen($vardas) < 3) {
            return 0;
        } else {
            return 1;
        }
    }

    public static function surnameValid(string $pavarde)
    {
        if (strlen($pavarde) < 3) {
            return 0;
        } else {
            return 1;
        }
    }

    public static function idValid(string $ak)
    {
        if (strlen($ak) !== 11) {
            return  0;
        }
        foreach (Json::connect()->showAll() as $val) {
            if ($val['ak'] == $ak) {
                return  0;
            }
        }
            return 1;  
    }

    public function store()
    {
        if(!empty($_POST)
            && $this->nameValid($_POST['vardas'])
            && $this->surnameValid($_POST['pavarde'])
            && $this->idValid($_POST['ak'])
        ) { 
            Json::connect()->create([
                'vardas' => $_POST['vardas'],
                'pavarde' => $_POST['pavarde'],
                'iban' => $_POST['iban'],
                'ak' => $_POST['ak'],
                'likutis' => $_POST['likutis']
            ]);
            return App::redirect('/users'); 
        }
        
        return App::redirect('/users/create');   
    }

    public function list()
    {
        return App::view('user_list', [
            'title' => 'Users List',
            'users' => Json::connect()->showAll()
        ]);
    }

    public function add(int $id) {
        return App::view('user_add', [
            'title' => 'Pridėti lėšų',
            'user' => Json::connect()->show($id)
        ]);
    }

    public function addUpdate(int $id) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(!empty($_POST['add'])) {
                if($_POST['add'] > 0) {
                foreach(Json::connect()->showAll() as $val) {
                    if($val['id'] == $id) {
                        $addMoney = $val['likutis'];
                        $suma = (int)$addMoney + (int)$_POST['add'];
                        Json::connect()->update($id, [
                            'likutis' => $suma
                        ]);
                        return App::redirect('/users');
                        } 
                    }
                }
            }
        } 
    }
      
    public function remove(int $id) {
        return App::view('user_remove', [
            'title' => 'Atimti lėšas',
            'user' => Json::connect()->show($id)
        ]);
    }

    public function removeUpdate(int $id) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(!empty($_POST['remove'])) {
                foreach(Json::connect()->showAll() as $val) {
                    if($val['id'] == $id) {
                        if($_POST['remove'] <= $val['likutis']) {
                            $removeMoney = $val['likutis'];
                            $remove = (int)$removeMoney - (int)$_POST['remove'];
                            Json::connect()->update($id, [
                                'likutis' => $remove
                            ]);
                            return App::redirect('/users');
                        }
                    } 
                }
            }
        }
    } 
    
}



        
