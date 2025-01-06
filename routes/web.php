<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\ReceipesController;




Route::get('/', function () {
    return view ('welcome');
});


Route::get('/contact', function () {
    return view('layouts.contactUs');
});

Route::get('/Admin/dashboard', function () {
    return view('layouts.Admin.dashboard.dashboard');
});


Route::get('/about', function () {
    return view('layouts.AboutUs');
});


Route::post('/register',[authController::class,'register'])->name('register');
Route::post('/login',[authController::class,'login'])->name('login');

Route::middleware(['guest'])->group(function(){

    Route::get('/User/dashboard/profile', function () {
        return view('layouts.User.dashboard.Profile.profile');
    });

    Route::resource('/User/dashboard/profile', ReceipesController::class)->names([
        'index' => 'profile.index',
        'store' => 'profile.store',
        'destroy' => 'profile.destroy',
    ]);    
    
    Route::get('/User/dashboard/newsfeed', function () {
        return view('layouts.User.dashboard.Newsfeed.newsfeed');
    });
    
    Route::get('/User/dashboard/details', function () {
        return view('layouts.User.dashboard.Details.details');
    });
});

