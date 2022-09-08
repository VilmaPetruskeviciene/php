<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController
{
    private $data;
    private $errors = [];

    public function create()
    {
        return App::view('user_create', [
            'title' => 'New User',
        ]);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(strlen($this->data['vardas']) < 3 || $this->data['vardas'] == strtolower($this->data['vardas'])) {
                $this->addErr('vardas', 'Vardas yra per trumpas arba iš mažosios raidės!');
            } 
    
            if(strlen($this->data['pavarde']) < 3 || $this->data['pavarde'] == strtolower($this->data['pavarde'])) {
                $this->addErr('pavarde', 'Pavardė yra per trumpa arba iš mažosios raidės!'); 
            }
    
            if(strlen($this->data['ak']) != 11) {
                $this->addErr('ak', 'Neteisingas asmens kodo formatas!');   
            } else {
                foreach (Json::connect()->showAll as $val) {
                    if ($this->data['ak'] == in_array($this->data['ak'], $val)) {
                        $this->addErr('ak', 'Toks asmens kodas jau yra!');
                    }
                }
            }

            if (!empty($errors)) {
                App::view('user_create', ['title' => 'User Create', 'errors' => $errors]);
            } else {
                Json::connect()->create([
                    'vardas' => $_POST['vardas'],
                    'pavarde' => $_POST['pavarde'],
                    'iban' => $_POST['iban'],
                    'ak' => $_POST['ak'],
                    'likutis' => $_POST['likutis']
                ]);
                return App::redirect(''); 
            }
        }
            
    }

    private function addErr(string $key, string $val)
    {
        $this->errors[$key] = $val;
    }
}
