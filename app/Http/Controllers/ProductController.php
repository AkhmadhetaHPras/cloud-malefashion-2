<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $products = Product::where('product_name', 'LIKE', '%' . request('search') . '%')
                ->orWhere('price', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tags', 'LIKE', '%' . request('search') . '%')
                ->orWhereHas('brand', function ($query) {
                    $query->where('name', 'like', '%' . request('search') . '%');
                })
                ->orWhereHas('category', function ($query) {
                    $query->where('category', 'like', '%' . request('search') . '%');
                })
                ->paginate(9);
        } else {
            $products = Product::paginate(9);
        }

        $title = 'Shop';

        $categories = Category::all();
        $brands = Brand::all();

        return view('shop', compact('title', 'products', 'categories', 'brands'));
    }

    public function show($slug)
    {
        $title = 'Shop';

        // reviews and size
        $p = Product::where('slug', $slug)->with('review', 'variant')->first();
        $relatedproduct = Category::find($p->category_id);

        return view('shop-detail', compact('title', 'p', 'relatedproduct'));
    }

    public function brandfilter(Brand $brand)
    {
        $title = 'Shop';
        $products = Product::where('brand_id', $brand->id)->paginate(9);

        // return dd($products);
        $categories = Category::all();
        $brands = Brand::all();

        return view('shop', compact('title', 'products', 'categories', 'brands'));
    }

    public function categoryfilter(Category $category)
    {
        $title = 'Shop';
        $products = Product::where('category_id', $category->id)->paginate(9);

        // return dd($products);
        $categories = Category::all();
        $brands = Brand::all();

        return view('shop', compact('title', 'products', 'categories', 'brands'));
    }
}
