<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
{
 return view('categories.index')->with(['to_do_lists' => $category->getByCategory()]);
}
}