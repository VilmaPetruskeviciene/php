<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($kiek, $abc)
    {
        $mas = ['asilas', 'karvius', 'bulius', 'kalakutas'];
        return view('kitkas.fun', ['abc' => $abc, 'mas' => $mas, 'kiek' => $kiek]);
    }
}
