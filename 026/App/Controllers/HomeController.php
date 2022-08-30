<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class HomeController {

    public function home() {
        $title = 'H-O-M-E';
        $welcome = 'Hello from fancy zoo!';

        Json::connect();

        return App::view('home', ['title'=>$title, 'welcome'=>$welcome]);
    }
    
}