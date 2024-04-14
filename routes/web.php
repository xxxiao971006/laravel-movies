<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies.index');
Route::get('/movie/{movie}', [App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show'); 

