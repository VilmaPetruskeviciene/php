<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SquareController extends Controller
{
    public function redSquare() {
        return Inertia::render('RedSquare', [
            'size' => '200',
        ]);
    }

    public function addSquare(Request $request)
    {
        $squares = $request->session()->get('sq', []);
        $squares[] = [
            'text' => $request->text,
            'color' => $request->color,
        ];

        $request->session()->put('sq', $squares);

        return response()->json([
            'squares' => $squares,
        ]);
    }

/*
    public function redSquareBlade() {
        return view('RedSquare', [
            'color' => 'crimson',
            'size' => '78'
        ]);
    }
    */
}
