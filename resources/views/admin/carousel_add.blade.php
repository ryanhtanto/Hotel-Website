@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('title', "Add Carousel Image")

@section('content')
<x-admin-navbar></x-admin-navbar>
<div class="container">
    
    <form method="post" action="{{url('add_carousel')}}" enctype="multipart/form-data">
        @csrf
        @if ($msg = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $msg }}</strong>
            </div>
        @endif
        <div class="mb-3">
            <label for="hotel" class="form-label">Hotel Name</label>
            <div class="input-group mb-3">
                <select class="form-select" id="hotel" name="id_hotel">
                    @foreach ($hotel as $hotel)
                        <option value="{{$hotel->id_hotel}}">{{$hotel->hotel_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <input type="file" class="form-control" id="inputGroupFile02" name="images">
                    <label class="input-group-text" for="inputGroupFile02" name="carousel_images">Upload</label>
                </div>
            </div> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>