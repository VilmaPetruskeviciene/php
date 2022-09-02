<?php

namespace App\Controllers;

use App\App;

class ApiController {

    public function show()
    {
        if (isset($_SESSION['d'])) {
            $d = $_SESSION['d'];
            unset($_SESSION['d']);
        }
        return App::view('api_form', [
            'title' => 'Select form',
            'result' => $d ?? ''
        ]);
    }

    public function doApi()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.distance24.org/route.json?stops='.$_POST['from'].'|'.$_POST['to']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output);
        $_SESSION['d'] = [
            'from' => $_POST['from'],
            'to' => $_POST['to'],
            'd' => $output->distance,
            'from_link' => $output->stops[0]->wikipedia->home,
            'to_link' => $output->stops[1]->wikipedia->home
        ];
        return App::redirect('api/go');
    }

}