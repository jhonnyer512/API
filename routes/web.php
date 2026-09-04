<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController; 

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {

    // LOGIN
    Route::get('/login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'store'])
        ->middleware('throttle:login')
        ->name('login.store');

    // REGISTRO
    Route::get('/register', [LoginController::class, 'createRegister'])
        ->name('register');

    Route::post('/register', [LoginController::class, 'register'])
        ->name('register.store');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    // LOGOUT
    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');


    Route::get('/perfil', [ProfileController::class, 'edit'])
        ->name('profile.edit');


    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');
    
    Route::put('/perfil', [ProfileController::class, 'update'])
    ->name('profile.update');

});