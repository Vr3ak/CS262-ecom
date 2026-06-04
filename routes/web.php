<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;

// Fallback home endpoint to redirect directly to your products dashboard
Route::get('/', function () { 
    return redirect('/products'); 
});

// READ: Fetch all products ordered by newest and load the view
Route::get('/products', function () {
    $products = Product::latest()->get();
    return view('products', ['products' => $products]);
});

// CRUD ACTIONS: Mapped to your ProductController methods
Route::post('/create-product', [ProductController::class, 'createProduct']);
Route::get('/edit-product/{product}', [ProductController::class, 'showEditScreen']);
Route::put('/update-product/{product}', [ProductController::class, 'updateProduct']);
Route::delete('/delete-product/{product}', [ProductController::class, 'deleteProduct']);