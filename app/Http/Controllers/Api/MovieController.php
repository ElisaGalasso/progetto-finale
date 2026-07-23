<?php

namespace App\Http\Controllers\Api;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //controller api index
    public function index()
    {
        $movies= Movie::with([
            'genre',
            'director'
            ])->get();
        return response()->json($movies);
    }

    //controller api show
    public function show($id)
    {
        $movie = Movie::with([
            'genre',
            'director'
        ])->findOrFail($id);
        return response()->json($movie);
    }
}
