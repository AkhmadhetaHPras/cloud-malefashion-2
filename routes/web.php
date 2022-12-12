<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VariantController;
use Illuminate\Support\Facades\Route;


// ========================== ************ ===========================

// guest
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/{product:slug}', [ProductController::class, 'show'])->name('shop.details');
Route::get('/shop/brand/{brand:name}', [ProductController::class, 'brandfilter'])->name('shop.brandfilter');
Route::get('/shop/category/{category:category}', [ProductController::class, 'categoryfilter'])->name('shop.categoryfilter');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');

Route::get('/signup', [RegisterController::class, 'index'])->name('signup');


// AUTHENTICATED
Route::group(['middleware' => ['auth', 'role:Admin,Customer']], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');


    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

    Route::get('/myorders', [MyOrderController::class, 'index'])->name('myorders');
    Route::post('/placeorder', [MyOrderController::class, 'store'])->name('myorders.store');
    Route::put('/myorders/cancel/{id}', [MyOrderController::class, 'cancel'])->name('myorders.cancel');

    Route::put('/myorders/complated/{id}', [MyOrderController::class, 'complated'])->name('myorders.complated');

    Route::get('/invoice/{id}', [MyOrderController::class, 'invoice'])->name('invoice');

    Route::get('/reviewsuccess', [ReviewController::class, 'reviewsuccess']);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// ADMIN
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    // Dashboard Admin Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Order resource route
    Route::resource('order', AdminOrderController::class); 
    Route::resource('user', AdminUserController::class); 

    // Order Routes
    Route::prefix('orders')->group(function () {                        
        Route::get('/incoming-order', [AdminOrderController::class, 'incoming'])->name('orders-in');

        Route::get('/listall', [AdminOrderController::class, 'index'])->name('orders-listall');
        Route::put('/accept/{id}', [AdminOrderController::class, 'accept'])->name('orders-accept');
        Route::put('/reject/{id}', [AdminOrderController::class, 'reject'])->name('orders-reject');
        Route::get('/edit-show/{id}', [AdminOrderController::class, 'edit'])->name('orders-editshow');
        Route::put('/edit/{id}', [AdminOrderController::class, 'update'])->name('orders-edit');

        Route::get('/view/{id}', [AdminOrderController::class, 'show'])->name('orders-view');       

        Route::get('/invoice-print/{id}', [AdminOrderController::class, 'invoice'])->name('invoice-print');
    });

    //Product Routes 
    Route::prefix('products')->group(function () {
        Route::get('/add', [AdminProductController::class, 'create'])->name('products-add');
        Route::post('/add', [AdminProductController::class, 'store'])->name('products-post');
        Route::get('/view/{id}', [AdminProductController::class, 'show'])->name('products-view');

        Route::post('/add/variant/{id}', [AdminProductController::class, 'storevariant'])->name('variant-post');
        Route::put('/edit/variant/{id}', [AdminProductController::class, 'editvariant'])->name('variant-edit');

        Route::get('/listall', [AdminProductController::class, 'index'])->name('products-listall');       

        Route::put('/edit/{id}', [AdminProductController::class, 'update'])->name('products-edit');
    });

    //User Routes 
    Route::prefix('users')->group(function () {
        Route::get('/add', function () {
            return view('admin.app-user-add', ['title' => 'Users-Add']);
        })->name('users-add');

        Route::get('/listall', [AdminUserController::class, 'index'])->name('users-listall');
        Route::get('/change-password/{id}', [AdminUserController::class, 'changepasswd'])->name('ad-changePasswd');

        Route::get('/view', function () {
            return view('admin.app-user-view', ['title' => 'Users-View']);
        })->name('users-view');

        Route::get('/edit', function () {
            return view('admin.app-user-edit', ['title' => 'Users-Edit']);
        })->name('users-edit');
    });

    // Under maintenance Page Route
    Route::get('/404-error', function () {
        return view('admin.under-maintenance', ['title' => '404-error']);
    })->name('404-error');
});

// AJAX REQUEST
Route::group(['middleware' => ['ajax']], function () {
    // header component
    Route::post('/signup', [RegisterController::class, 'register']);
    Route::post('/signin', [LoginController::class, 'authenticate']);

    // shop page
    Route::post('/cart/{id}', [CartController::class, 'addtocart']);
    Route::put('/cart/{id}', [CartController::class, 'update']);
    Route::delete('/cart/{id}', [CartController::class, 'delete']);
    Route::get('/cart-fetch', [CartController::class, 'fetch']);

    // shop detail page
    Route::get('/stock-fetch/{id}', [VariantController::class, 'getstock']);

    // review
    Route::post('/review/{o}/{p}', [ReviewController::class, 'store']);

    // profile page
    Route::get('/profile-fetch', [ProfileController::class, 'fetch']);
    Route::put('/profile-credentials/{id}', [ProfileController::class, 'updatecredentials']);
    Route::post('/address', [ProfileController::class, 'newaddress']);
    Route::delete('/address/{id}', [ProfileController::class, 'deladdress']);
});

// UNAUTHORIZED
Route::get('/unauthorized', function () {
    return view('401', ['title' => '401']);
})->name('unauthorized');

// NOT FOUND
Route::fallback(function () {
    return view('404', ['title' => '404']);
});
