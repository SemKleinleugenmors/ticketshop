<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieStoreRequest;
use App\Models\Movie;
use App\Models\Subtitle;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subtitles = Subtitle::all();
        $countries = Country::all();

        return view('admin.movies.create', compact('subtitles', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieStoreRequest $request)
    {
//        dd($request->all());

        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . str_replace(" ", "_", $file->getClientOriginalName());
            $file->move('img/movies', $filename);
        }

        Movie::create([
            'title' => $request->input('title'),
            'duration' => $request->input('duration'),
            'director' => $request->input('director'),
            'country_id' => $request->input('country'),
            'subtitle_id' => $request->input('subtitle'),
            'img_path' => $filename,
            'description' => $request->input('description'),
            'year' => $request->input('year')
        ]);

        return redirect('/movies');
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        $subtitles = Subtitle::all();
        $countries = Country::all();
//        $subtitle = $movie->subtitles;
//        $country = $movie->countries;

        return view('admin.movies.create', compact('movie', 'subtitles', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieStoreRequest $request, $id)
    {

        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . str_replace(" ", "_", $file->getClientOriginalName());
            $file->move('img/movies', $filename);
        }
        $movie = Movie::find($id)
        ->update([
            'title' => $request->input('title'),
            'duration' => $request->input('duration'),
            'director' => $request->input('director'),
            'country_id' => $request->input('country'),
            'subtitle_id' => $request->input('subtitle'),
            'img_path' => $filename,
            'description' => $request->input('description'),
            'year' => $request->input('year')
        ]);

        return redirect('/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::where('id', $id)->delete();

        return redirect('/movies');
    }
}
