<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController {

    public function create()
    {
        
        return App::view('user_create', [
            'title' => 'New User'
        ]);
    }
}