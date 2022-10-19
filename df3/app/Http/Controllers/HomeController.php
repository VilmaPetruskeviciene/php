<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;

class HomeController extends Controller
{
    public function homeList(Request $request)
    {
        return view('movie.index', [
            'movies' => Movie::orderBy('updated_at', 'desc')->get(),    
        ]);
    }
}
