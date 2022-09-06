<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class HomeController {
    public function home() {
        $title = 'Bank2';
        $welcome = 'Bankas 2';

        Json::connect();
        
        return App::view('home', [
            'title' => $title, 
            'welcome' => $welcome
        ]);
    }
}