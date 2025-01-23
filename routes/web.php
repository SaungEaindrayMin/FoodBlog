<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminReceipesController;
use App\Http\Controllers\ReceipesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateAdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\MailController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('layouts.AboutUs');
})->name('about');

Route::get('/contact', function () {
    return view('layouts.contactUs');
})->name('contact');

Route::post('/contact', [MailController::class, 'store'])->name('contact.store');

Route::get('/register', function () {
    return view('auth.userRegister');
})->name('register.form');

Route::get('/login', function () {
    return view('auth.userLogin');
})->name('login.form');

// Authentication Routes
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Admin Dashboard Routes
Route::get('/admin/dashboard/home', function () {
    return view('layouts.Admin.dashboard.dashboard');
});

Route::prefix('admin/dashboard')->group(function () {
    Route::get('/managecategory', [CategoryController::class, 'index'])->name('managecategory');
    Route::get('/newcategory', [CategoryController::class, 'create'])->name('newcategory');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
});

Route::resource('/admin/dashboard/createadmin', CreateAdminController::class)->names([
    'index' => 'createadmin.index',
    'create' => 'createadmin.create',
    'store' => 'createadmin.store',
    'show' => 'createadmin.show',
    'edit' => 'createadmin.edit',
    'update' => 'createadmin.update',
    'destroy' => 'createadmin.destroy',
]);

Route::get('/admin/dashboard/manageadmin', [AdminController::class, 'index'])->name('manageadmin');
Route::get('/admin/dashboard/manageuser', [UserController::class, 'index'])->name('manageuser');
Route::get('/admin/dashboard/managerecipe', [ReceipesController::class, 'manage'])->name('managerecipe');

Route::delete('/admin/dashboard/deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');
Route::delete('/admin/dashboard/deleteadmin/{id}', [AdminController::class, 'destroy'])->name('deleteadmin');
Route::put('/admin/dashboard/admin/{id}', [AdminController::class, 'update'])->name('admin.update');

// User Dashboard Routes
Route::prefix('user/dashboard')->middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/cookbook', [UserController::class, 'cookbook'])->name('user.cookbook');
    Route::get('/education', [UserController::class, 'education'])->name('user.education');
});

// Authenticated User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('/user/dashboard/profile', ReceipesController::class)->names([
        'index' => 'profile.index',
        'store' => 'profile.store',
    ]);

    Route::get('/recipe/{id}', [ReceipesController::class, 'show'])->name('recipe.detail');
});

Route::get('/educational', function () {
    return view('layouts.User.dashboard.EducationalResource.index');
});