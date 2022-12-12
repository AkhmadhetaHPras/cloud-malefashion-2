<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';

        $new = Product::orderBy('id', 'desc')
            ->take(4)
            ->get();
        $bestseller = Product::orderBy('rating', 'desc')
            ->take(4)
            ->get();

        $shoes = Category::where('category', 'Shoes')->first();
        $shirts = Category::where('category', 'Shirts')->first();
        $accessories = Category::where('category', 'Accessories')->first();
        return view('home', compact('title', 'bestseller', 'new', 'shoes', 'shirts', 'accessories'));
    }
}
