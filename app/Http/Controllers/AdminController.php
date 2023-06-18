<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\HotelImage;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index(){
        if(session('user')->role == 'admin'){
            return view('admin.admin_crud');
        }
        return redirect('home');
    }

    public function delete_hotel($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return back()->with('delete', 'Hotel has been deleted');
    }

    public function edit_index($id)
    {
        if(session('user')->role == 'admin'){
            $hotels = Hotel::find($id);
            $location = Location::all();
            return view('admin.admin_edit', ['hotel' => $hotels, 'location' => $location]);
        } else{
            return redirect('home');
        }
    }

    public function hotel_edit(Request $request)
    {
        $request->validate([
            'hotel_name' => 'required',
            'id_location' => 'required',
            'address' => 'required',
            'hotel_star' => 'required',
            'available_room' => 'required',
            'price' => 'required | numeric',
        ]);
        $hotel = Hotel::find($request->id_hotel);
        $hotel->hotel_name = $request->input('hotel_name');
        $hotel->id_location = $request->input('id_location');
        $hotel->address = $request->input('address');
        $hotel->hotel_star = $request->input('hotel_star');
        $hotel->price = $request->input('price');
        $hotel->room_available = $request->input('available_room');
        if(!empty($request->file('images'))){
            $filename = $request->file('images')->getClientOriginalName();
            $hotel->images = $filename;
            $request->file('images')->move('images/Hotel', $filename);
        }
        
        $hotel->save();
        
        return back()->with('success', "Hotel information has been updated!");
    }

    function add_hotel_index(){
        if(session('user')->role == 'admin'){
            $location = Location::all();
            return view('admin.hotel_add', ['location' => $location]);
        }else{
            return redirect('home');
        }
    }

    function add_hotel(Request $request){
        $request->validate([
            'hotel_name' => 'required',
            'id_location' => 'required',
            'address' => 'required',
            'hotel_star' => 'required',
            'available_room' => 'required',
            'price' => 'numeric',
            'images' => 'required',
        ]);
        $hotel = new Hotel();

        $hotel->hotel_name = $request->input('hotel_name');
        $hotel->id_location = $request->input('id_location');
        $hotel->address = $request->input('address');
        $hotel->hotel_star = $request->input('hotel_star');
        $hotel->room_available = $request->input('available_room');
        $hotel->price = $request->input('price');
        $filename = $request->file('images')->getClientOriginalName();
        $hotel->images = $filename;
        $request->file('images')->move('images/Hotel', $filename);
        
        $hotel->save();

        return back()->with('success', "Hotel added into database!");
    }

    public function add_location_index(){
        if(session('user')->role == 'admin'){
            return view('admin.location_add');
        }else{
            return redirect('home');
        }
    }

    public function add_location(Request $request){
        $request->validate([
            'location' => 'required | unique:location',
        ]);

        $location = new Location();
        $location->location = $request->input('location');

        $query = $location->save();

        if($query){
            return back()->with('success', "Location have been successfuly added!");
        }else{
            return back();
        }
    }

    public function add_carousel_index(Request $request){
        if(session('user')->role == 'admin'){
            $hotel = Hotel::all();
            return view('admin.carousel_add', ['hotel' => $hotel]);
        } else{
            return redirect('home');
        }

        
    }

    public function add_carousel(Request $request){
        $request->validate([
            'id_hotel' => 'required',
            'images' => 'required'
        ]);
        $image = new HotelImage();
        $image->id_hotel = $request->input('id_hotel');
        $filename = $request->file('images')->getClientOriginalName();
        $image->carousel_images = $filename;
        $request->file('images')->move('images/hotelCarousel', $filename);
        
        $image->save();

        return back()->with('success', "Image added into database!");
    }
}
