<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {

//     return "This is the page for the Dashboard";

// });

Route::get('/test', function () {

    return view('admin-dashboard');
});

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
