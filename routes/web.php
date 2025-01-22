<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminReceipesController;
use App\Http\Controllers\ReceipesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateAdminController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('layouts.AboutUs');
});

Route::get('/contact', function () {
    return view('layouts.contactUs');
});

Route::get('/register', function () {
    return view('auth.userRegister');
})->name('register.form');

Route::get('/login', function () {
    return view('auth.userLogin');
})->name('login.form');

// Authentication Routes
Route::post('/register', [authController::class, 'register'])->name('register');
Route::post('/login', [authController::class, 'login'])->name('login');

// Admin Dashboard Routes
Route::get('/admin/dashboard/home', function () {
    return view('layouts.Admin.dashboard.dashboard');
});

Route::resource('/admin/dashboard/createadmin', CreateAdminController::class)->names([
    'index' => 'createadmin.index',
    'store' => 'createadmin.store',
]);

Route::get('/admin/dashboard/manageadmin', [AdminController::class, 'index'])->name('manageadmin');
Route::get('/admin/dashboard/manageuser', [UserController::class, 'index'])->name('manageuser');
Route::get('/admin/dashboard/managerecipe', [ReceipesController::class, 'manage'])->name('managerecipe');

Route::delete('/admin/dashboard/deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');
Route::delete('/admin/dashboard/deleteadmin/{id}', [AdminController::class, 'destroy'])->name('deleteadmin');
Route::put('/admin/dashboard/admin/{id}', [AdminController::class, 'update'])->name('admin.update');

// Authenticated User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [authController::class, 'logout'])->name('logout');

    Route::resource('/user/dashboard/profile', ReceipesController::class)->names([
        'index' => 'profile.index',
        'store' => 'profile.store',
    ]);

});


Route::get('/educational', function () {
    return view('layouts.User.dashboard.EducationalResource.index');
});