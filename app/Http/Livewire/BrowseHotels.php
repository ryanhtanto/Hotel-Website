<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\Booking;

class BrowseHotels extends Component
{
    public $query;
    public $hotels;
    public $selectedStar;
    public $from;
    public $to;
    public $locations;
    public $idLocation;

    public function mount(){
        $this->hotels = Hotel::all();
        $this->query = '';
        $this->selectedStar = [];
        $this->from = 1;
        $this->to = 10000000;
        $this->locations = Location::all();
        $this->idLocation = '';
    }

    public function updatedQuery(){
        if(empty($this->selectedStar) && empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')->get();
        }else if(empty($this->selectedStar)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }else if(empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->get();
        }else{
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }
    }

    public function clickedSelectedStar(){
        if(empty($this->selectedStar) && empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')->get();
        }else if(empty($this->selectedStar)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }else if(empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->get();
        }else{
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }
    }

    public function updatedFrom(){
        if(empty($this->selectedStar) && empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')->get();
        }else if(empty($this->selectedStar)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }else if(empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->get();
        }else{
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }
    }

    public function updatedTo(){
        if(empty($this->selectedStar) && empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')->get();
        }else if(empty($this->selectedStar)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }else if(empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->get();
        }else{
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }
    }

    public function updatedIdLocation(){
        if(empty($this->selectedStar) && empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')->get();
        }else if(empty($this->selectedStar)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }else if(empty($this->idLocation)){
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->get();
        }else{
            $this->hotels = Hotel::where('hotel_name', 'like', '%'.$this->query.'%')
            ->whereIn('hotel_star', $this->selectedStar)
            ->where('price', '>=', $this->from)
            ->where('price', '<=', $this->to)
            ->where('id_location', $this->idLocation)
            ->get();
        }
    }

    public function resetFilters(){
        $this->query = '';
        $this->hotels = [];
        $this->locations = [];
        $this->search_box = '';
    }

    public function render()
    {
        return view('livewire.browse-hotels', ['date_now' => date("Y-m-d"), ['hotels' => $this->hotels]]);
    }
}
