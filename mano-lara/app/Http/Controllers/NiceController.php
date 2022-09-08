<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($duok, $kuku)
    {
        return $kuku . ' FUN: ' . $duok;
    }
}
