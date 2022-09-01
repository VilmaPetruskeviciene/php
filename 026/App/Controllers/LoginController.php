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
        M::makeMsg('aquamarine', 'Bye. Dont come back.');
        return App::redirect('');
    }

    public function doLogin()
    {

        $users = Json::connect('users')->showAll();

        foreach ($users as $user) {
            if ($user['name'] == $_POST['name']) {
                if ($user['pass'] == md5($_POST['pass'])) {
                    $_SESSION['login'] = 1;
                    $_SESSION['user'] = $user;
                    M::makeMsg('aquamarine', 'You are beautiful.');
                    return App::redirect('animals');
                }
            }
        }
        M::makeMsg('crimson', 'You are slow.');
        M::makeMsg('black', 'You are very slow.');
        M::makeMsg('crimson', 'But You can try one more time.');
        return App::redirect('login');

    }
    
}