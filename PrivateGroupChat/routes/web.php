<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [UsersController::class, 'login'])
    ->name('login');

Route::get('/logout', [UsersController::class, 'logout'])
    ->name('logout');

Route::get('/home', function(){
    return view('home');
});


Route::get('/home', [ProfileController::class, 'show'])
    ->middleware('auth');
