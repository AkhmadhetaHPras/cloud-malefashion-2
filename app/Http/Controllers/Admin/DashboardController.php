<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        $product = Product::all()->count();
        $customercart = CartItem::all()->count();
        $customer = User::where('role', 'Customer')->count();
        $rating = Review::avg('rating');
        $order = Order::all()->count();

        $waiting = Order::where('status', 'Waiting Confirmation')->count();
        $processed = Order::where('status', 'Processed')->count();
        $sent = Order::where('status', 'Sent')->count();
        $rejected = Order::where('status', 'Rejected')->count();
        $completed = Order::where('status', 'Completed')->count();
        $canceled = Order::where('status', 'Canceled')->count();

        $sales = Order::where('status', 'Paid')->orWhere('status', 'Completed')->sum('total');

        $bestproduct = Product::orderBy('rating', 'desc')
            ->take(6)
            ->get();
        return view('admin.dashboard', compact('title', 'product', 'customercart', 'customer', 'rating',
                'order' ,'waiting', 'processed', 'sent', 'rejected', 'completed', 'canceled', 'sales', 'bestproduct'));
    }
}
