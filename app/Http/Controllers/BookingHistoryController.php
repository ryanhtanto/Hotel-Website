<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingHistoryController extends Controller
{
    function index(){
        if(session()->has('user')){
            $bookings = DB::table('bookings')->join('hotels', 'bookings.id_hotel', '=', 'hotels.id_hotel')->where('id_user', '=', session('user')->id_user)->get();
            return view('booking_history', ['bookings' => $bookings]);
        } else{
            
            return redirect('home');
        }
        
    }
}
