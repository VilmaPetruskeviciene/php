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

    public function store()
    {
        Json::connect()->create([
            'vardas' => $_POST['vardas'],
            'pavarde' => $_POST['pavarde'],
            'iban' => $_POST['iban'],
            'ak' => $_POST['ak'],
            'likutis' => $_POST['likutis']
        ]);
        return App::redirect(''); 
    }

    public function list()
    {
        return App::view('user_list', [
            'title' => 'Users List',
            'users' => Json::connect()->showAll()
        ]);
    }

    public function add(int $id)
    {
        return App::view('user_add', [
            'title' => 'Pridėti lėšų',
            'user' => Json::connect()->show($id)
        ]);
    }

    public function addUpdate(int $id)
    {
        foreach (Json::connect()->showAll() as $val) {
            if ($val['id'] == $id) {
                $money = $val['likutis'];
            }
            $suma = (int)$money + (int)$_POST['addMoney'];
        }

        Json::connect()->update($id, [
            'vardas' => $_POST['vardas'],
            'pavarde' => $_POST['pavarde'],
            'iban' => $_POST['iban'],
            'ak' => $_POST['ak'],
            'likutis' => $suma
        ]);
        return App::redirect(''); 
    }
    
}
