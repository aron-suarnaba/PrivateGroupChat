<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [UsersController::class, 'login'])
    ->name('login.submit');

Route::get('/logout', [UsersController::class, 'logout'])
    ->name('logout');

Route::get('/home', function(){
    return view('home');
});
