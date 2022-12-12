<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $title = 'Shop';
        $cartitems = CartItem::where('user_id', Auth::user()->id)->get();

        $address = Auth::user()->address;

        return view('checkout', compact('title', 'cartitems', 'address'));
    }
}
