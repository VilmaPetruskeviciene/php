<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Session;

class SquareController extends Controller
{
    
    public function redSquare()
    {
        return Inertia::render('RedSquare', [
            'size' => 200,
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
            'msg' => 'OK'
        ]);
        
    }

    public function getSquares()
    {
        $squares = Session::get('sq', []);

        return response()->json([
            'squares' => $squares
        ]);
    }

    public function resetSquares()
    {
        $squares = Session::put('sq', []);

        return response()->json([
            'msg' => 'OK'
        ]);
    }

    // public function redSquareBlade()
    // {
    //     return view('RedSquare', [
    //         'color' => 'crimson',
    //         'size' => '78'
    //     ]);
    // }

}