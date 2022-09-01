<?php

namespace App\Controllers;

use App\App;

class HomeController {
    public function home() {
       return App::view('home');
    }
}