<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcome');

Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');

Route::post('/login', [UserController::class, 'store'])
    ->name('login.store');

Route::post('/logout', [UserController::class, 'logout'])
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Home');
    })->name('dashboard');

    Route::get('/AssetInventoryManagement', function(){
        return Inertia::render('AssetInventoryManagement');
    })->name('AssetInventoryManagement');
});
