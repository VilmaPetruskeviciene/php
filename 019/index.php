<?php

echo '<pre>';

define('INSTALL', '/php/019/');

router();

function router() {

    $url = $_SERVER['REQUEST_URI'];

    $url= str_replace(INSTALL, '', $url);

    $url = explode('/', $url);
    
    //print_r($url);

    if ($url[0] == 'add-money') {
        require __DIR__ . '/inc/add.php';
    } 
    else if (count($url) == 2 && $url[0] == 'rem-money') {
        require __DIR__ . '/inc/rem.php';
    }
    else {
        echo '<h1>404</h1>';
    }
}