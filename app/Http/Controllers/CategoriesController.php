<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $products = Product::where('category_id', $category->id)->get();
        return view('categories.show', compact('category', 'products'));
    }
}
