<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.userRegister');
});

Route::get('/login', function () {
    return view('auth.userLogin');
});

Route::get('/contact', function () {
    return view('components.contactUs');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});


Route::post('/register',[authController::class,'register'])->name('register');
Route::post('/login',[authController::class,'login'])->name('login');
Route::get('/dashboard',[authController::class,'dashboard'])->name('dashboard');