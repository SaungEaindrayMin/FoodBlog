<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminReceipesController;
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

Route::get('/Admin/dashboard/receipes', function () {
    return view('layouts.Admin.dashboard.receipes.receipes');
});

Route::get('/Admin/dashboard/user', function () {
    return view('layouts.Admin.dashboard.user.user');
});

Route::get('/Admin/dashboard/admin', function () {
    return view('layouts.Admin.dashboard.admin.admin');
});

Route::get('/Admin/dashboard/createAdmin', function () {
    return view('layouts.Admin.dashboard.admin.create');
});

Route::get('/about', function () {
    return view('layouts.AboutUs');
});


Route::post('/register',[authController::class,'register'])->name('register');
Route::post('/login',[authController::class,'login'])->name('login');
Route::post('/Admin/dashboard/createAdmin', [AdminController::class, 'store'])->name('store');


Route::resource('/Admin/dashboard/receipes/receipes',AdminReceipesController::class)->names([
    'index' => 'receipes.index',
]);    



Route::middleware(['auth'])->group(function(){


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

