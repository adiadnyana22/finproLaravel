<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function cart() {
        $dropdownCategory = Category::all();
        $productCart = User::where('email', '=', Auth::user()->email)->first()->cart;

        $totalPrice = 0;
        foreach ($productCart as $product) {
            $totalPrice += $product->product->price * $product->quantity;
        }

        return view('pages.user.cart')->with("dropdown", $dropdownCategory)->with("products", $productCart)->with("total", $totalPrice);
    }

    public function deleteCart(Cart $cart) {
        $cart->delete();

        return redirect()->route('cart');
    }

    public function addToCart(Request $request) {
        $validateReq = $request->validate([
            'quantity' => 'required|integer'
        ]);

        $cekProduct = Cart::where([['user_id', '=', Auth::user()->id], ['product_id', '=', $request->product]])->first();
        if($cekProduct) {
            $cekProduct->quantity += $request->quantity;
            $cekProduct->save();
        } else {
            $newCart = new Cart();
            $newCart->user_id = Auth::user()->id;
            $newCart->product_id = $request->product;
            $newCart->quantity = $request->quantity;
            $newCart->save();
        }

        return redirect()->route('cart');
    }

    public function purchase(Request $request) {
        $newOrder = new Order();
        $newOrder->order_date = Carbon::now()->format('Y-m-d H:m:s');
        $newOrder->total_price = $request->total;
        $newOrder->user_id = Auth::user()->id;
        $newOrder->save();

        $productOnCart = Cart::where('user_id', '=', Auth::user()->id)->get();
        foreach ($productOnCart as $product){
            $newOrderDetail = new OrderDetail();
            $newOrderDetail->order_id = $newOrder->id;
            $newOrderDetail->product_id = $product->product_id;
            $newOrderDetail->quantity = $product->quantity;
            $newOrderDetail->save();

            $product->delete();
        }

        return redirect()->route('cart')->with("success", "Transaction Added Successfully");
    }

    public function history() {
        $dropdownCategory = Category::all();
        $orderHistory = Order::with('order')->where('user_id', '=', Auth::user()->id)->get();

        return view('pages.user.history')->with("dropdown", $dropdownCategory)->with("history", $orderHistory);
    }
}
