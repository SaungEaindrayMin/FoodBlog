<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;


Route::get('/', function () {
    return view ('welcome');
});

Route::get('/register', function () {
    return view('auth.userRegister');
});

Route::get('/login', function () {
    return view('auth.userLogin');
});

Route::get('/contact', function () {
    return view('layouts.contactUs');
});
Route::get('/User/dashboard', function () {
    return view('layouts.User.dashboard.dashboard');
});

Route::get('/about', function () {
    return view('layouts.AboutUs');
});

Route::get('/User/dashboard/profile', function () {
    return view('layouts.User.dashboard.Profile.profile');
});

Route::get('/User/dashboard/newsfeed', function () {
    return view('layouts.User.dashboard.Newsfeed.newsfeed');
});

Route::get('/User/dashboard/details', function () {
    return view('layouts.User.dashboard.Details.details');
});



Route::post('/register',[authController::class,'register'])->name('register');
Route::post('/login',[authController::class,'login'])->name('login');
Route::get('/dashboard',[authController::class,'dashboard'])->name('dashboard');