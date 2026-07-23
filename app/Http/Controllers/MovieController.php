<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Director;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::with(['genre', 'director'])->get();

        return view('movies.index', compact('movies'));
        //dd($movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres=Genre::all();
        $directors=Director::all();

        return view('movies.create', compact('genres', 'directors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = new Movie();

        $movie->poster = $path= $request->file('poster') ->store('posters', 'public');

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->duration = $request->duration;
        $movie->release_year = $request->release_year;
        $movie->poster = $path;
        $movie->genre_id = $request->genre_id;
        $movie->director_id = $request->director_id;

        $movie->save();

        return redirect('/movies');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie=Movie::with(['genre', 'director'])->findOrFail($id);

        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);

        $genres = Genre::all();
        $directors = Director::all();

        return view('movies.edit', compact('movie','genres','directors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);

        if ($request->hasFile('poster')) {

            $movie->poster = $path= $request->file('poster') ->store('posters', 'public');
            
            $movie->poster = $path;
        }

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->duration = $request->duration;
        $movie->release_year = $request->release_year;
        $movie->genre_id = $request->genre_id;
        $movie->director_id = $request->director_id;

        $movie->save();

        return redirect('/movies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie=Movie::findOrFail($id);

        $movie->delete();

        return redirect('/movies');
    }
}
