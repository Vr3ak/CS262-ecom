<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.homepage');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');})->name('admin.dashboard');

Route::get('admin/user', [UserController::class, 'index'])->name('users.index');
Route::get('admin/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('admin/user', [UserController::class, 'store'])->name('users.store');
Route::get('admin/user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('admin/user/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('admin/user/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/register', [AuthController::class, 'registerForm'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.store');
Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/categories/{category}', [CategoriesController::class, 'show'])->name('categories.show');

Route::get('admin/products', [ProductController::class, 'index'])->name('products.index');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('admin/products', [ProductController::class, 'store'])->name('products.store');
Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('admin/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
