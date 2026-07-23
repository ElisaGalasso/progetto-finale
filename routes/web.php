<?php

//importo i controller
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//aggiungo le rotte
Route::resource('movies', MovieController::class);
Route::resource('genres', GenreController::class);
Route::resource('directors', DirectorController::class);


Route::middleware('auth')->group(function () {


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
