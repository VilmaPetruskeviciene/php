<?php
use App\App;

define('DIR', __DIR__.'/../');
define('URL', 'http://animals.zoo/');


require DIR . 'vendor/autoload.php';

App::start();