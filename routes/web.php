<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/user/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
