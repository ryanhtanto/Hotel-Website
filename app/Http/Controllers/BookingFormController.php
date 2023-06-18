<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Location;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingFormController extends Controller
{
    function index(){
        if(session()->has('user')){
            if(session()->has('total_price')){
                return view('booking_form');
            }
            return redirect('home');
        } else{
            return redirect('login_signup');
        }
        
    }

    function confirm_booking(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phoneNumber' => 'required | numeric',
            'totalRoom' => 'required',
            'checkIn' => 'required',
            'checkOut' => 'required',
            'total_price' => 'required'
        ]);
        
        $booking = new Booking;
        $booking->id_user = session('user')->id_user;
        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phoneNumber');
        $booking->id_hotel = session('selected_hotel')->id_hotel;
        $booking->check_in = $request->input('checkIn');
        $booking->check_out = $request->input('checkOut');
        $booking->total_harga = $request->input('total_price');

        $booking->save();

        return redirect('home');
    }

    function cancel_booking(){
        session()->forget('selected_hotel');
        session()->forget('total_price');
        session()->forget('checkIn');
        session()->forget('checkOut');
        session()->forget('totalRoom');

        return redirect('hotels');
    }
}
