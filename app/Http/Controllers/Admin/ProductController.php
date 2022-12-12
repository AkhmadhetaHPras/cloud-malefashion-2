<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Products-ListAll';        
        $products = Product::with('brand','category')->paginate(10);   
        
        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.app-product-list', compact('title', 'products', 'brands', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Products-Add';
        
        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.app-product-add', compact('title', 'brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:100',
            'yt_link' => 'required',
            'description' => 'required',
            'short_desc' => 'required',
            'price' => 'required|integer',
            'category' => 'required',
            'brand' => 'required',
            'tags' => 'required',
            'slug' => 'required|unique:products,slug',
            'thumbnail' => 'required',
            'display1' => 'required',
            'display2' => 'required',
            'display3' => 'required',
            'display4' => 'required',
        ]);

        $products = new Product();
        $products->product_name = $request->get('product_name');
        $products->yt_link = $request->get('yt_link');
        $products->description = $request->get('description');
        $products->short_desc = $request->get('short_desc');
        $products->price = $request->get('price');
        // dd($request->get('tags'));
        $products->tags = implode(",", $request->get('tags'));
        $products->slug = $request->get('slug');
        $products->rating = 0;

        $category = Category::find($request->get('category'));
        $brand = Brand::find($request->get('brand'));

        $products->category()->associate($category);
        $products->brand()->associate($brand);

        // thumbnail
        if ($products->thumbnail && file_exists(storage_path('app/public/' . $products->thumbnail))) {
            Storage::delete('public/' . $products->thumbnail);
        }
        $filename = $request->get('slug') . '_thumbnail';
        $extension = $request->file('thumbnail')->getClientOriginalExtension();
        $filenameSimpan = $filename . '.' . $extension;
        $path = $request->file('thumbnail')->storeAs('public/img/product/', $filenameSimpan);
        $savepath = 'img/product/' . $filenameSimpan;
        $products->thumbnail = $savepath;

        // display 1
        if ($products->display1 && file_exists(storage_path('app/public/' . $products->display1))) {
            Storage::delete('public/' . $products->display1);
        }
        $filename = $request->get('slug') . '_display1';
        $extension = $request->file('display1')->getClientOriginalExtension();
        $filenameSimpan = $filename . '.' . $extension;
        $path = $request->file('display1')->storeAs('public/img/product/', $filenameSimpan);
        $savepath = 'img/product/' . $filenameSimpan;
        $products->display1 = $savepath;

        // display 2
        if ($products->display2 && file_exists(storage_path('app/public/' . $products->display2))) {
            Storage::delete('public/' . $products->display2);
        }
        $filename = $request->get('slug') . '_display2';
        $extension = $request->file('display2')->getClientOriginalExtension();
        $filenameSimpan = $filename . '.' . $extension;
        $path = $request->file('display2')->storeAs('public/img/product/', $filenameSimpan);
        $savepath = 'img/product/' . $filenameSimpan;
        $products->display2 = $savepath;

        // display 3
        if ($products->display3 && file_exists(storage_path('app/public/' . $products->display3))) {
            Storage::delete('public/' . $products->display3);
        }
        $filename = $request->get('slug') . '_display3';
        $extension = $request->file('display3')->getClientOriginalExtension();
        $filenameSimpan = $filename . '.' . $extension;
        $path = $request->file('display3')->storeAs('public/img/product/', $filenameSimpan);
        $savepath = 'img/product/' . $filenameSimpan;
        $products->display3 = $savepath;

        // display 4
        if ($products->display4 && file_exists(storage_path('app/public/' . $products->display4))) {
            Storage::delete('public/' . $products->display4);
        }
        $filename = $request->get('slug') . '_display4';
        $extension = $request->file('display4')->getClientOriginalExtension();
        $filenameSimpan = $filename . '.' . $extension;
        $path = $request->file('display4')->storeAs('public/img/product/', $filenameSimpan);
        $savepath = 'img/product/' . $filenameSimpan;
        $products->display4 = $savepath;

        $products->save();

        return redirect()->route('products-listall')->with('success', 'Add product successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $title = 'Products-View';
        $products = Product::where('id', $id)->first();

        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.app-product-view', compact('title', 'products','brands', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $validator1 = Validator::make($request->all(), [
            'product_name' => 'required|max:100',
            'yt_link' => 'required',
            'description' => 'required',
            'short_desc' => 'required',
            'price' => 'required|integer',
            'category' => 'required',
            'brand' => 'required',
            'tags' => 'required',
            'slug' => 'required|unique:products,slug,' . $products->id,
        ]);

        if ($validator1->fails()) {
            return Redirect::back()
                ->withErrors($validator1)
                ->with('error_code', 8);
        }
        
        $products->product_name = $request->get('product_name');
        $products->yt_link = $request->get('yt_link');
        $products->description = $request->get('description');
        $products->short_desc = $request->get('short_desc');
        $products->price = $request->get('price');
        // dd($request->get('tags'));
        $products->tags = implode(",", $request->get('tags'));
        $products->slug = $request->get('slug');
        $products->rating = 0;

        $category = Category::find($request->get('category'));
        $brand = Brand::find($request->get('brand'));

        $products->category()->associate($category);
        $products->brand()->associate($brand);

        // thumbnail
        if ($request->hasFile('thumbnail')) {
            if ($products->thumbnail && file_exists(storage_path('app/public/' . $products->thumbnail))) {
                Storage::delete('public/' . $products->thumbnail);
            }
            $filename = $request->get('slug') . '_thumbnail';
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $filenameSimpan = $filename . '.' . $extension;
            $path = $request->file('thumbnail')->storeAs('public/img/product/', $filenameSimpan);
            $savepath = 'img/product/' . $filenameSimpan;
            $products->thumbnail = $savepath;
        }

        // display 1
        if ($request->hasFile('display1')) {
            if ($products->display1 && file_exists(storage_path('app/public/' . $products->display1))) {
                Storage::delete('public/' . $products->display1);
            }
            $filename = $request->get('slug') . '_display1';
            $extension = $request->file('display1')->getClientOriginalExtension();
            $filenameSimpan = $filename . '.' . $extension;
            $path = $request->file('display1')->storeAs('public/img/product/', $filenameSimpan);
            $savepath = 'img/product/' . $filenameSimpan;
            $products->display1 = $savepath;
        }

        // display 2
        if ($request->hasFile('display2')) {
            if ($products->display2 && file_exists(storage_path('app/public/' . $products->display2))) {
                Storage::delete('public/' . $products->display2);
            }
            $filename = $request->get('slug') . '_display2';
            $extension = $request->file('display2')->getClientOriginalExtension();
            $filenameSimpan = $filename . '.' . $extension;
            $path = $request->file('display2')->storeAs('public/img/product/', $filenameSimpan);
            $savepath = 'img/product/' . $filenameSimpan;
            $products->display2 = $savepath;
        }
        
        // display 3
        if ($request->hasFile('display3')) {
            if ($products->display3 && file_exists(storage_path('app/public/' . $products->display3))) {
                Storage::delete('public/' . $products->display3);
            }
            $filename = $request->get('slug') . '_display3';
            $extension = $request->file('display3')->getClientOriginalExtension();
            $filenameSimpan = $filename . '.' . $extension;
            $path = $request->file('display3')->storeAs('public/img/product/', $filenameSimpan);
            $savepath = 'img/product/' . $filenameSimpan;
            $products->display3 = $savepath;
        }

        // display 4
        if ($request->hasFile('display4')) {
            if ($products->display4 && file_exists(storage_path('app/public/' . $products->display4))) {
                Storage::delete('public/' . $products->display4);
            }
            $filename = $request->get('slug') . '_display4';
            $extension = $request->file('display4')->getClientOriginalExtension();
            $filenameSimpan = $filename . '.' . $extension;
            $path = $request->file('display4')->storeAs('public/img/product/', $filenameSimpan);
            $savepath = 'img/product/' . $filenameSimpan;
            $products->display4 = $savepath;
        }
        
        
        $products->save();
        return Redirect::back()->with('success', 'Update product successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storevariant(Request $request , $id) {
        $request->validate([
            'size' => 'required',
            'stock' => 'required',
        ]);

        $product = Product::find($id);

        $variant = new Variant();
        $variant->product()->associate($product);
        $variant->size = $request->get('size');
        $variant->stock = $request->get('stock');
        $variant->save();

        return Redirect::back()->with('success', 'Add variant successfully!');
    }

    public function editvariant(Request $validation, $id){
        $validation->validate([
            'size' => 'required',
            'stock' => 'required',
        ]);
        
        $variant = Variant::find($id);            
        $variant->size = $validation->get('size');
        $variant->stock = $validation->get('stock');
        $variant->save();

        return Redirect::back()->with('success', 'Edit variant successfully!');
    }
}
