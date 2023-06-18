@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('title', "Edit Hotel")

@section('content')
    <x-admin-navbar></x-admin-navbar>
    <div class="container">
        <form method="post" action="{{url('hotel_edit')}}" enctype="multipart/form-data">
            @csrf
            @if ($msg = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $msg }}</strong>
                </div>
            @endif
            <input type="hidden" value="{{$hotel->id_hotel}}" name="id_hotel">
            <div class="mb-3">
                <label for="hotel_name" class="form-label">Hotel name</label>
                <input type="text" class="form-control" id="hotel_name" value="{{$hotel->hotel_name}}" name="hotel_name">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="location"  name="id_location">
                        @foreach ($location as $location)
                            <option value="{{$location->id_location}}">{{$location->location}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" readonly class="form-control" id="address" value="{{$hotel->address}}" name="address">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price"  value="{{$hotel->price}}" name="price">
            </div>
            <div class="mb-3">
                <label for="hotel_star" class="form-label">Hotel Star</label>
                <input type="number" class="form-control" id="hotel_star"  value="{{$hotel->hotel_star}}" name="hotel_star">
            </div>
            <div class="mb-3">
                <label for="available_room" class="form-label">Available Room</label>
                <input type="number" class="form-control" id="available_room"  value="{{$hotel->room_available}}" name="available_room">
            </div>
            <div class="input-group mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/Hotel/'.$hotel->images)}}" class="card-img-top" alt="" style="width:150px; height: 150px;">
                    <div class="card-body">
                        <input type="file" class="form-control" id="inputGroupFile02" name="images">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                </div> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection