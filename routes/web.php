<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('movies', MovieController::class);

Route::get('buscar', [App\Http\Controllers\MovieController::class, 'buscar']);
