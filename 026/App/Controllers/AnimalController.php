<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class AnimalController {

    public function create()
    {

        return App::view('animal_create', [
            'title' => 'New Animal'
        ]);
    }

    public function store()
    {
        Json::connect()->create([
            'type' => $_POST['type'],
            'weight' => $_POST['weight'],
            'tail' => isset($_POST['tail']) ? 1 : 0 
        ]);
        return App::redirect('animals');
    }


    public function list()
    {

        return App::view('animal_list', [
            'title' => 'Animals List',
            'animals' => Json::connect()->showAll()
        ]);
    }
    
}