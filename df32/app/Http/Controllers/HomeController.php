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
            'movies' => Movie::orderBy('title')->get(),    
        ]);
    }

    public function rate(Request $request, Movie $movie)
    {
        $movie->rating_sum = $movie->rating_sum + $request->rate;
        $movie->rating_count ++;
        $movie->rating = $movie->rating_sum / $movie->rating_count;
        $movie->save();
        return redirect()->back();
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
