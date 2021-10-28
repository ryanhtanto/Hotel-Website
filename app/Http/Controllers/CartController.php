<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(){
        if(session()->has('user')){
            return view('cart.cart', ['title' => 'Cart', 'css'=> 'cart']);
        } else{
            return redirect('login');
        }
    }

    function calculate_total(Request $request){
        $request->validate([
            'duration' => 'required'
        ]);

        if(session()->missing('cart')){
            return back()->with('missing_item', "You have no item in your cart!");
        }
        
        $total = 0;
        foreach(session()->get('cart') as $item){
            $total = $total + $item['harga'];
        }

        $grand_total = $total * $request->duration;

        $request->session()->put('cart_total', $grand_total);
        $request->session()->put('order_duration', $request->duration);
        return back();
    }   

    function checkout(){
        if(session()->missing('cart_total')){
            return back()->with('fail', "Please calculate your order first!");
        }
        

        foreach(session()->get('cart') as $item){
            $order = new Order;
            $order->user_id = session('user')->id_user;
            $order->item_name = $item['console_name'];
            $order->duration = session('order_duration');
            $order->price = $item['harga'];
            $order->total_price = $item['harga'] * session('order_duration');
            $order->status = 'Sedang dikirim';
            $order->games = $item['game1']. ', ' .$item['game2'];
            $order->save();
        }
        
        
        session()->forget(['cart', 'cart_total', 'order_duration']);
        return back()->with('success', "Your order has been confirmed!");
    }
}
