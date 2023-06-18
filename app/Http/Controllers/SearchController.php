<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function filter_search(Request $request){
        $request->validate([
            'search_input' => 'required',
            'check_in' => 'required',
            'duration' => 'required',
            'check_out' => 'required'
        ]);

        $hotel = Hotel::where('hotel_name', $request->search_input)->get();
        $hotels_by_location = DB::table('hotels')
                                ->join('location', 'hotels.id_location', '=', 'location.id_location')
                                ->where('location.location', $request->search_input)
                                ->get();

        if(!empty($hotels_by_location)){
            return redirect('hotels');
        }
    }
}
