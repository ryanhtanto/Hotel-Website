<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class AdminFilter extends Component
{
    public $hotelList;
    public $idLocation;
    public $locations;

    public function mount(){
        $this->hotelList = DB::table('hotels')->join('location', 'hotels.id_location','=','location.id_location')->get();
        $this->idLocation = '';
        $this->locations = Location::all();
    }

    public function updatedIdLocation(){
        $this->hotelList = DB::table('hotels')->join('location', 'hotels.id_location','=','location.id_location')
                        ->where('hotels.id_location', '=', $this->idLocation)->get();
    }
    
    public function render()
    {
        return view('livewire.admin-filter');
    }
}
