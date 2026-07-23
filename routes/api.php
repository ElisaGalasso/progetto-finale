<?php

use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\DirectorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//api Movies
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);

//api Genres
Route::get('/genres', [GenreController::class, 'index']);

//api Directors
Route::get('/directors', [DirectorController::class, 'index']);
Route::get('/directors/{id}', [DirectorController::class, 'show']);

