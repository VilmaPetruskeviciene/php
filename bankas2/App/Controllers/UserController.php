<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController
{
    public function create()
    {
        return App::view('user_create', [
            'title' => 'New User',
        ]);
    }

    public function store()
    {
        /*
        $idUnique = true;
        $vardas = $pavarde = $ak = '';
        $msg = ['ak' => '', 'vardas' => '', 'pavarde' => ''];

        if (isset($_POST['submit'])) {

            if (strlen($_POST['vardas']) < 3) {
                $msg['vardas'] = 'Vardas yra per trumpas!';
            } else {
                $vardas = $_POST['vardas'];
                if ($vardas == strtolower($vardas)) {
                    $msg['vardas'] = 'Vardas iš mažosios raidės!';
                }
            }

            if (strlen($_POST['pavarde']) < 3) {
                $msg['pavarde'] = 'Pavardė yra per trumpa!';
            } else {
                $pavarde = $_POST['pavarde'];
                if ($pavarde == strtolower($pavarde)) {
                    $msg['pavarde'] = 'Pavardė iš mažosios raidės!';
                }
            }

            if(strlen($_POST['ak']) != 11) {
                $msg['ak'] = 'Neteisingas asmens kodo formatas!';   
            } else {
                $ak = $_POST['ak'];
            }

            $data = json_decode(file_get_contents(DIR .'/DB/data.json'), 1);

            foreach($data as $val) {
                if($val['ak'] == $_POST['ak']) {
                    $idUnique = false;
                }
            }
        }

        if($idUnique && !array_filter($msg)) {*/
            Json::connect()->create([
                'vardas' => $_POST['vardas'],
                'pavarde' => $_POST['pavarde'],
                'iban' => $_POST['iban'],
                'ak' => $_POST['ak'],
                'likutis' => $_POST['likutis']
            ]);
            return App::redirect(''); 
            /*  
        } else {
            $msg['ak'] = 'Neteisingas asmens kodo formatas arba toks asmens kodas jau yra!';  
        } */
    }
}
