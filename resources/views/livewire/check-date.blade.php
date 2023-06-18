<div class="col">
    <form action="{{url('availability_check')}}" method="POST">
        @csrf

        <label for="checkIn">Check-in</label>
        <input wire:model="checkIn" class="form-control" type="date" name="checkIn" min="{{$today}}">
        <br>
        <label for="duration">Duration(day)</label>
        <input wire:model="duration" class="form-control" type="number" name="duration" min="1">
        <br>
        <label for="totaRoom">Total Room</label>
        <input wire:model="totalRoom" class="form-control" type="number" name="totalRoom" min="1">
        <br>
        <label for="checkOut">Check-out</label>
        <input class="form-control" type="date" name="display_checkOut" value="{{$checkOut}}" disabled>
        <input type="hidden" name="checkOut" value="{{$checkOut}}">
        <br>

        {{-- date unavailable alert --}}
        @if (!empty($date_unavailable))
            <p class="alert alert-danger">
                @foreach ($date_unavailable as $key => $date)
                    {{date_format(date_create($date), 'd-m-Y')}}
                    @if($key < count($date_unavailable)-2)
                        ,
                    @elseif($key < count($date_unavailable)-1)
                        , and
                    @endif
                @endforeach
            is unavailable</p>
            <br>
        @elseif(!empty($checkIn) && !empty($duration) && !empty($totalRoom))
            <p class="alert alert-success">
                Room Available!
            </p>
        @endif
        {{-- date unavailable alert end --}}

        @if (Session::get('date_error'))
            <p class="alert alert-danger">
                {{Session::get('date_error')}}
            </p>
        @endif
        @if (Session::get('room_error'))
            <p class="alert alert-danger">
                {{Session::get('room_error')}}
            </p>
        @endif
        <div class="text-center">
            <button 
                type="submit" 
                class="btn btn-booking"
                @if(!empty($date_unavailable) || empty($checkIn) || empty($duration) || empty($totalRoom))  disabled @endif
                >Book Now
            </button>
        </div>
    </form>    
</div>
