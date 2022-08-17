<?php
session_start();
define('INSTALL', '/php/login/');
define('DIR', __DIR__. '/');
define('URL', 'http://localhost/php/login/');



router();

// echo sha('Ačiū');




function router() {
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTALL, '', $url);
    $url = explode('/', $url);
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'GET' && count($url) == 1 && $url[0] == 'login') {
        if (isLogged()) {
            redirect('');
        }
        view('login');
    }
    else if ($method == 'POST' && count($url) == 1 && $url[0] == 'login') {
        doLogin();
    }
    else if ($method == 'POST' && count($url) == 1 && $url[0] == 'logout') {
        doLogout();
    }
    else if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
        view('home');
    }
    else if ($method == 'GET' && count($url) == 1 && $url[0] == 'client') {
        if (!isLogged()) {
            redirect('login');
        }
        view('client');
    }
    else {
        echo '404';
    }
    


    // require DIR . 'inc/' . 'home.php';

}

function view($tmp) 
{
    require DIR . 'inc/' . $tmp . '.php';
}

function redirect($where)
{
    header('Location: ' . URL . $where);
    die;
}

function doLogin()
{
    $users = file_get_contents(DIR . 'inc/users.json');
    $users = json_decode($users, 1);

    foreach ($users as $user) {
        if ($user['name'] == $_POST['name']) {
            if ($user['pass'] == md5($_POST['psw'])) {
                $_SESSION['login'] = 1;
                $_SESSION['user'] = $user;
                makeMsg('skyblue', 'Labai Gerai');
                redirect('client');
            }
        }
    }
    makeMsg('crimson', 'Viskas labai blogai');
    redirect('login');
}

function doLogout()
{
    unset($_SESSION['login'], $_SESSION['user']);
    makeMsg('green', 'Ate');
    redirect('login');
}

function isLogged() 
{
    return (isset($_SESSION['login']) && $_SESSION['login'] == 1);
}

function makeMsg($type, $text) {
    $_SESSION['msg'] = ['type' => $type, 'text' => $text ];
}