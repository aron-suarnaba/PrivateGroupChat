<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia; // Don't forget to import Inertia

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('Welcome');

Route::get('/login', function(){
    return Inertia::render('Login');
})->name('login');

Route::get('/Home', function () {
    return Inertia::render('Home');
})->name('Home');
