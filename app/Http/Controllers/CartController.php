<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $title = 'Shop';
        $cartitems = CartItem::where('user_id', Auth::user()->id)->get();

        return view('shop-cart', compact('title', 'cartitems'));
    }

    public function fetch()
    {
        $cart = CartItem::where('user_id', Auth::user()->id)->with('variant.product')->get();

        return response()->json([
            'cart' => $cart,
        ]);
    }

    public function addtocart(Request $request)
    {
        $id = $request->get('id');
        $qty = $request->get('qty');

        if ($id == null) {
            return response()->json([
                'status' => 400,
                'errors' => 'Please select the size.',
            ]);
        }
        $cartitems = CartItem::where('user_id', Auth::user()->id)->get();

        $any = $cartitems->where('variant_id', $id)->first();
        if ($any === null) {
            $item = new CartItem();
            $item->user()->associate(Auth::user());
            $item->variant()->associate(Variant::find($id));
            $item->quantity = $qty;
            $item->subtotal = Variant::find($id)->product->price * $item->quantity;
            $item->save();
        } else {
            $any->quantity = $any->quantity + $qty;
            $any->subtotal = Variant::find($id)->product->price *  $any->quantity;
            $any->save();
        }

        $cartitems = CartItem::where('user_id', Auth::user()->id)->get();
        return response()->json([
            'nitem' => $cartitems->count(),
            'total' => $cartitems->sum('subtotal'),
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = CartItem::find($id);

        $item->quantity = $request->get('qty');
        $item->subtotal = $item->variant->product->price *  $item->quantity;
        $item->save();

        $cart = CartItem::where('user_id', Auth::user()->id)->get();
        return response()->json([
            'subtotal' => $item->subtotal,
            'total' => $cart->sum('subtotal'),
        ]);
    }

    public function delete($id)
    {
        $item = CartItem::find($id)->delete();

        $cart = CartItem::where('user_id', Auth::user()->id)->get();
        return response()->json([
            'total' => $cart->sum('subtotal'),
            'nitem' => $cart->count(),
            'message' => 'Item deleted successfully.',
        ]);
    }
}
