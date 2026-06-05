<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function electronics() {
        return view('categories.electronics');
    }

    public function agricultural() {
        return view('categories.agricultural');
    }

    public function drinks() {
        return view('categories.drinks');
    }

    public function accessories() {
        return view('categories.accessories');
    }

    public function clothing() {
        return view('categories.clothing');
    }
}
