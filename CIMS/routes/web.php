<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia; // Don't forget to import Inertia

Route::get('/', function () {
    return Inertia::render('Home');
})->name('Home');
