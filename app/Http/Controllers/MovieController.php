<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }

}
