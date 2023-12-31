<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        return view('category', [
            "title" => "category",
            "category" => $category
        ]);
    }
}
