<?php

namespace App;

class App {

    static public function start() {
        self::router();
    }

    static public function router() {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
               
        }
    }
}