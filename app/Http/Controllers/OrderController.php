<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    function index(){
        if(session()->has('user')){
            $order = Order::where('user_id', session('user')->id_user)->get();
            return view('order', ['title' => 'Your Order', 'css' => 'order', 'orders' => $order]);
        }
        return redirect('home');
    }

    function pickup($id){
        $order = Order::find($id);
        $order->status = 'Siap di Pick-up';
        $order->save();
        return back();
    }
}
