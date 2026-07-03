<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ChirpController::class, 'index']);

// AUTHENTICATION 
Route::middleware('auth')->group(function() {
    
    Route::post('/chirps', [ChirpController::class, 'store'] );
    Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
    Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
    Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);
});


Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');
Route::post('/register', Register::class)
    ->middleware('guest')
    ->name('register-post');

Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');
Route::post('/login', Login::class)
    ->middleware('guest')
    ->name('login-post');



// LOGOUT ROUTE
Route::post('request', Logout::class)
    ->middleware('auth')
    ->name('logout');
