@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('title', "Add Hotel")

@section('content')
    <x-admin-navbar></x-admin-navbar>
    <div class="container">
        <form method="post" action="{{url('add_hotel')}}" enctype="multipart/form-data">
            @csrf
            @if ($msg = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $msg }}</strong>
                </div>
            @endif
            <div class="mb-3">
                <label for="hotel_name" class="form-label">Hotel name</label>
                <input type="text" class="form-control" id="hotel_name" name="hotel_name">
                <span style="color: red">@error('hotel_name'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="location" name="id_location">
                        @foreach ($location as $location)
                            <option value="{{$location->id_location}}">{{$location->location}}</option>
                        @endforeach
                    </select>
                </div>
                <span style="color: red">@error('location'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
                <span style="color: red">@error('address'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
                <span style="color: red">@error('price'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="hotel_star" class="form-label">Hotel Star</label>
                <input type="number" class="form-control" id="hotel_star" name="hotel_star">
                <span style="color: red">@error('hotel_star'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="available_room" class="form-label">Available Room</label>
                <input type="number" class="form-control" id="available_room" name="available_room">
                <span style="color: red">@error('available_room'){{$message}}@enderror</span>
            </div>
            <div class="input-group mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <input type="file" class="form-control" id="inputGroupFile02" name="images">
                        <label class="input-group-text" for="inputGroupFile02" name="images">Upload</label>
                        <span style="color: red">@error('images'){{$message}}@enderror</span>
                    </div>
                </div> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection