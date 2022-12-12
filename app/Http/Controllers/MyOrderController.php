<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\CartItem;
use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use PDF;

class MyOrderController extends Controller
{
    public function index()
    {

        $title = 'Home';
        $myorder = User::find(Auth::user()->id)->order;

        $waiting = User::find(Auth::user()->id)->waitingorder;
        $processed = User::find(Auth::user()->id)->proceedorder;
        $sent = User::find(Auth::user()->id)->sentorder;
        $rejected = User::find(Auth::user()->id)->rejectedorder;
        $completed = User::find(Auth::user()->id)->completeorder;
        $canceled = User::find(Auth::user()->id)->canceledorder;

        // return dd($myorder);
        return view('myorders', compact('title', 'waiting', 'processed', 'sent', 'completed', 'canceled', 'rejected'));
    }

    public function cancel($id)
    {
        $order = Order::find($id);
        $order->status = 'Canceled';
        $order->save();

        // foreach ($order->detailorder as $i) {
        //     $i->variant->stock += $i->quantity;
        //     $i->variant->save();
        // }

        return redirect()->route('myorders')->with('success', 'Order canceled.');
    }

    public function complated($id) {
        $order = Order::find($id);
        $order->status = 'Completed';
        $order->save();

        return redirect()->route('myorders')->with('success', 'Order complated.');
    }

    public function store(Request $request)
    {
        $validator1 = Validator::make($request->all(), [
            'radioaddress' => 'required',
            'cod-checkbox' => 'required',
        ]);

        if ($validator1->fails()) {
            return Redirect::back()
                ->withErrors($validator1);
        }

        $address = Address::find($request->get('radioaddress'));

        $order = new Order();
        $order->address()->associate($address);
        $order->order_date = Carbon::now();
        if ($request->get('note') == null) {
            $order->note = '';
        } else {
            $order->note = $request->get('note');
        }
        $order->status = 'Waiting Confirmation';

        $cartitems = CartItem::where('user_id', Auth::user()->id)->get();

        $total = $cartitems->sum('subtotal');

        $order->total = $total;
        $order->save();

        foreach ($cartitems as $i) {
            $detailoder = new DetailOrder();
            $detailoder->order()->associate($order);
            $detailoder->variant()->associate($i->variant);
            $detailoder->quantity = $i->quantity;
            $detailoder->subtotal = $i->subtotal;
            $detailoder->save();

            // $i->variant->stock -= $i->quantity;
            // $i->variant->save();

            $i->delete();
        }

        return redirect()->route('myorders')->with('success', 'Order successfully created.');
    }

    public function invoice($id)
    {
        $order = Order::find($id);

        // return view('invoice', ['order' => $order]);
        $pdf = PDF::loadview('invoice', ['order' => $order]);
        return $pdf->stream();
    }
}
