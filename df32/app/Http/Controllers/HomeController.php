<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Comment;

class HomeController extends Controller
{
    public function homeList(Request $request)
    {
        return view('home.index', [
            'movies' => Movie::orderBy('updated_at', 'desc')->get(),    
        ]);
    }

    public function addComment(Request $request, Movie $movie)
    {
        Comment::create([
            'movie_id' => $movie->id,
            'post' => $request->post,
        ]);
        return redirect()->back();
    }
}
