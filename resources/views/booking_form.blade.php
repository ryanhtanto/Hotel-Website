@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/booking_form.css')}}">
@endpush

@section('title', "Booking Confirmation")

@section('content')
    <x-navbar></x-navbar>
    <div class="container" style="margin-top: 120px">
        <h3 class="fw-bold">{{session('selected_hotel')->hotel_name}} Booking Confirmation</h3>
        <p class="text-muted">Fill in contact and guest details below</p>
        <h5 class="fw-bold">Your Information</h5>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{url('confirm_booking')}}">
                    @csrf
                    <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                        <span style="color: red">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <span style="color: red">{{$message}}</span>
                                 @enderror
                            </div>
                            <div class="col">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="phoneNumber" class="form-control" id="phoneNumber" name="phoneNumber">
                                @error('phoneNumber')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <label for="room" class="form-label">Rooms</label>
                                <input type="number" class="form-control" id="room" value="{{session('totalRoom')}}" disabled>
                                <input type="hidden" name="totalRoom" value="{{session('totalRoom')}}">
                            </div>
                            <div class="col-sm">
                                <label class="form-label">Check-in Date</label>
                                <input type="date" class="form-control" name="checkIn" value="{{session('checkIn')}}" disabled>
                                <input type="hidden" name="checkIn" value="{{session('checkIn')}}">
                            </div>
                            <div class="col-sm">
                                <label class="form-label">Check-out Date</label>
                                <input type="date" class="form-control" name="checkIn" value="{{session('checkOut')}}" disabled>
                                <input type="hidden" name="checkOut" value="{{session('checkOut')}}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total price</label>
                        <h5 class="form-label fw-bold">Rp. {{number_format(session('total_price'))}}</h5>
                        <input type="hidden" name="total_price" value="{{session('total_price')}}">
                    </div>
                    <button class="btn btn-success fw-bold" type="submit">Confirm Booking</button>
                    <a href="{{url('cancel_booking')}}" class="btn btn-danger fw-bold">Cancel Booking</a>
                </form>
            </div>
        </div>
    </div>
@endsection