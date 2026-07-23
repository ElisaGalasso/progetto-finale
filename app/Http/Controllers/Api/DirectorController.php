<?php

namespace App\Http\Controllers\Api;

use App\Models\Director;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    //controller api directors index
    public function index()
    {
        $directors= Director::all();

        return response()->json($directors);
    }

    //controller api directors show
    public function show($id)
    {
        $director= Director::findOrFail($id);

        return response()->json($director);
    }
}
