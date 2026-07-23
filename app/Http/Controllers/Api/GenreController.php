<?php

namespace App\Http\Controllers\Api;

use App\Models\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //controller api genres index
    public function index()
    {
        $genres= Genre::all();

        return response()->json($genres);
    }
}
