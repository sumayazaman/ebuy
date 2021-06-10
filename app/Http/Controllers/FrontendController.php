<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->inRandomOrder()->get();
        $latest_categories = Category::latest()-> limit(4)->get();
            
        $products = Product::latest() -> limit(4) -> get();

        return view('index', compact('categories','products','latest_categories'));
    }

    public function productdetail()
    {
        return view('productdetail');
    }

    public function shop()
    {

    }
}
