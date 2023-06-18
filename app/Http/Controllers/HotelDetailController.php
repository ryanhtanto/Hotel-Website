<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\HotelImage;


class HotelDetailController extends Controller
{
    function index($id_hotel){
        $hotel = Hotel::find($id_hotel);
        $hotel_carousel = HotelImage::where('id_hotel', $id_hotel)->get();
        return view('hotel_detail', ['hotel' => $hotel, 'hotel_carousel' => $hotel_carousel]);
    }

    function availability_check(Request $request){
        $request->validate([
            'checkIn' => 'required',
            'duration' => 'required',
            'checkOut' => 'required',
            'totalRoom' => 'required'
        ]);

        if($request->checkIn > $request->checkOut){
            return back()->with('date_error', "Check-in date must be less than check-out date!");
        }

        if($request->totalRoom < 1){
            return back()->with('room_error', "Please enter more than 1 room!");
        }
        
        $selected_hotel = session('selected_hotel');
        
        $request->session()->put('selected_hotel', $selected_hotel);
        $request->session()->put('checkIn', $request->checkIn);
        $request->session()->put('checkOut', $request->checkOut);
        $request->session()->put('totalRoom', $request->totalRoom);
        $request->session()->put('total_price', $selected_hotel['price'] * $request->duration * $request->totalRoom);
        
        return redirect('booking_form');
    }
}
