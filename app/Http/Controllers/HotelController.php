<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function index()
    {
        $hotelList = Hotel::where('id_location', 1)->get();
        $location = Location::where('id_location', 1)->first();
        return view('hotel_list');
    }
}
