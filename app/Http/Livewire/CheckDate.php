<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\Booking;

class CheckDate extends Component
{
    public $checkIn;
    public $checkOut;
    public $duration;
    public $id_hotel;
    public $count;
    public $room_available;
    public $date_unavailable;
    public $hotel;
    public $totalRoom;

    public function mount($hotel, $id_hotel, $room_available){
        $this->checkIn = '';
        $this->checkOut = '';
        $this->duration = '';
        $this->count = 0;
        $this->id_hotel = $id_hotel;
        $this->room_available = $room_available;
        $this->date_unavailable = [];
        $this->hotel = $hotel;
        $this->totalRoom = '';
    }

    public function updatedDuration(){
        if(!empty($this->checkIn) && !empty($this->duration && !empty($this->totalRoom))){
            $this->checkOut = date('Y-m-d', strtotime('+'.$this->duration.' days', strtotime($this->checkIn)));
            $this->date_unavailable = [];
            for($i = date_create($this->checkIn); $i <= date_create($this->checkOut); date_modify($i, "+1 days")){
                $count = 0;
                $count += Booking::where('id_hotel', $this->id_hotel)
                                            ->where('check_in', '<=', $i)
                                            ->where('check_out', '>', $i)
                                            ->count();
                if($this->room_available - $count < $this->totalRoom){
                    array_push($this->date_unavailable, date_format($i, 'Y-m-d'));
                }  
            }
        }
    }

    public function updatedCheckIn(){
        if(!empty($this->checkIn) && !empty($this->duration && !empty($this->totalRoom))){
            $this->checkOut = date('Y-m-d', strtotime('+'.$this->duration.' days', strtotime($this->checkIn)));
            $this->date_unavailable = [];
            for($i = date_create($this->checkIn); $i <= date_create($this->checkOut); date_modify($i, "+1 days")){
                $count = 0;
                $count += Booking::where('id_hotel', $this->id_hotel)
                                            ->where('check_in', '<=', $i)
                                            ->where('check_out', '>', $i)
                                            ->count();
                if($this->room_available - $count < $this->totalRoom){
                    array_push($this->date_unavailable, date_format($i, 'Y-m-d'));
                }  
            }
        }
    }

    public function updatedTotalRoom(){
        if(!empty($this->checkIn) && !empty($this->duration && !empty($this->totalRoom))){
            $this->checkOut = date('Y-m-d', strtotime('+'.$this->duration.' days', strtotime($this->checkIn)));
            $this->date_unavailable = [];
            for($i = date_create($this->checkIn); $i <= date_create($this->checkOut); date_modify($i, "+1 days")){
                $count = 0;
                $count += Booking::where('id_hotel', $this->id_hotel)
                                            ->where('check_in', '<=', $i)
                                            ->where('check_out', '>', $i)
                                            ->count();
                if($this->room_available - $count < $this->totalRoom){
                    array_push($this->date_unavailable, date_format($i, 'Y-m-d'));
                }  
            }
        }
    }
    
    public function render()
    {
        session()->put('selected_hotel', $this->hotel);
        return view('livewire.check-date', ['today' => date('Y-m-d')]);
    }
}
