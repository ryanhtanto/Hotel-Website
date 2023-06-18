<div class="container">
    <br>
    <label>Filter by location</label>
    <select wire:model="idLocation" class="form-control" style="max-width: 300px">
        @foreach ($locations as $location)
            <option value="{{$location->id_location}}">{{$location->location}}</option>
        @endforeach
    </select>
    <br>
    @if ($msg = Session::get('delete'))
        <div class="alert alert-danger">
            <strong>{{ $msg }}</strong>
        </div>
    @endif
    @foreach ($hotelList as $hotel)
        <div class="card mb-3" >
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('images/Hotel/'. $hotel->images)}}" height="300px" width="350px" style="object-fit: cover">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$hotel->hotel_name}}</h5>
                        <p class="card-text">
                            <p style="display: none;">{{ $star = $hotel->hotel_star}}<p>
                            @for ($i = 0; $i < $star; $i++)
                                <i class="fas fa-star icon"></i>
                            @endfor   
                        </p>
                        <p class="card-text">
                            <small class="text-muted">{{$hotel->address}}, {{$hotel->location}}</small>
                        </p>
                        <p class="card-text">Total Room : {{$hotel->room_available}}</p>
                        <p class="card-text">Rp. {{number_format($hotel->price)}}</p>
                        <span style="display: inline;">
                            <a href="{{url('delete/'.$hotel->id_hotel)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="{{url('admin_edit/'.$hotel->id_hotel)}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>