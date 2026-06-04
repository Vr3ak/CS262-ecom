<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.homepage');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/user/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/register', [AuthController::class, 'registerForm'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.store');
Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/categories/electronics', [CategoriesController::class, 'electronics'])->name('categories.electronics');
Route::get('/categories/agricultural', [CategoriesController::class, 'agricultural'])->name('categories.agricultural');
Route::get('/categories/drinks', [CategoriesController::class, 'drinks'])->name('categories.drinks');
Route::get('/categories/accessories', [CategoriesController::class, 'accessories'])->name('categories.accessories');
Route::get('/categories/clothing', [CategoriesController::class, 'clothing'])->name('categories.clothing');