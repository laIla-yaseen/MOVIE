<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MoviesController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('movie', [MoviesController::class, 'index'])->name('movie.index');
// Route::get('movie/create', [MoviesController::class, 'create'])->name('movie.create');
// Route::post('movie', [MoviesController::class, 'store'])->name('movie.store');
// Route::get('movie/{movie}/edit', [MoviesController::class, 'edit'])->name('movie.edit');
// Route::put('movie/{movie}', [MoviesController::class, 'update'])->name('movie.update');
// Route::delete('movie/{movie}', [MoviesController::class, 'destroy'])->name('movie.destroy');



 Route::resource('movies', MoviesController::class);