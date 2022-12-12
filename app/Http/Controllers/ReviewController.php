<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function store(Request $request, $o, $p)
    {
        $validator1 = Validator::make($request->all(), [
            'rating' => 'required',
            'review' => 'required',
        ]);

        if ($validator1->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator1->messages()
            ]);
        }


        $order = Order::find($o);
        $product = DetailOrder::find($p)->variant->product;

        $review = new Review();
        $review->post_date = Carbon::now();
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');
        $review->order()->associate($order);
        $review->product()->associate($product);
        $review->user()->associate(Auth::user());
        $review->save();

        $product->rating = Review::where('product_id', $product->id)->avg('rating');
        $product->save();

        $subtotal = DetailOrder::find($p)->subtotal;
        return response()->json([
            'status' => 200,
            'message' => 'Thankyou for the review',
            'subtotal' => $subtotal,
        ]);
    }

    public function reviewsuccess()
    {
        return redirect()->route('myorders')->with('error_code', 7);
    }
}
