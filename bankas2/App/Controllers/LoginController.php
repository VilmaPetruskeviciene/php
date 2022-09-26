<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Services\Messages as M;

class LoginController {

    public function login()
    {
        $title = 'Login';
        return App::view('login', [
            'title' => $title, 
        ]);
    }

    public function logout()
    {
        unset($_SESSION['login'], $_SESSION['user']);
        M::makeMsg('crimson', 'Jūs atsijungėte.');
        return App::redirect('/login');
    }

    public function doLogin()
    {
        $users = Json::connect('users')->showAll();
        foreach ($users as $user) {
            if ($user['name'] == $_POST['name']) {
                if ($user['pass'] == md5($_POST['pass'])) {
                    $_SESSION['login'] = 1;
                    $_SESSION['user'] = $user;
                    M::makeMsg('aquamarine', 'Jūs sėkmingai prisijungėte.');
                    return App::redirect('/users');
                }
            }
        }
        M::makeMsg('crimson', 'Prisijungimo duomenys neteisingi.');
        return App::redirect('/login');
    }

    
}