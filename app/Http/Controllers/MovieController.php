<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        // if($book){
        //     return view('books.show', compact('book'));
        // } else {
        //     abort(404);
        // }
        return view('movies.show', compact('movie'));
    }
}