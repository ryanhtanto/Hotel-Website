@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/booking_history.css')}}">
@endpush

@section('title', "Home")

@section('content')
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 19rem;">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-4" >
                                <img src="{{url('/images/Users/'.session('user')->images)}}" width="70px" height="70px" style="border-radius: 50%; object-fit: cover">
                            </div>
                            <div class="col-8 d-flex align-items-center justify-content-center">
                                <p class="fw-bold">Hi, {{session('user')->name}}</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item"><i class="fas fa-file-invoice" style="color: #fb700b;"></i> My Bookings</li>
                    </ul>
                </div>
            </div>
            <div class="col-9" >

                {{-- if order empty condition --}}
                @if (empty($bookings))
                    <div class="card mb-3 text-center">
                        <div class="row g-0">
                            <div class="card-body">
                                <h5 class="card-title">No Booking Found</h5>
                                <p class="card-text">You haven't made any booking <a href="#" style="color: blue">Make Booking Now</a></p>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- single booking card --}}
                @foreach ($bookings as $booking)
                    <div class="card">
                        <div class="card-body">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <h4 class="fw-bold">Booking Confirmed #{{$booking->id_booking}}</h4>
                                        </button>
                                        <div class="card" style="border: none;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="text-muted" style="font-size: 20px">
                                                            PURCHASED ON
                                                        </p>
                                                        <p style="font-size: 15px">{{date("F j, Y, g:i a", strtotime($booking->created_at))}}</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-muted" style="font-size: 20px">
                                                            HOTEL
                                                        </p>
                                                        <p style="font-size: 15px">{{$booking->hotel_name}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="card">
                                                <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            Name
                                                        </div>
                                                        <div class="col text-end">
                                                            {{$booking->name}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            Email
                                                        </div>
                                                        <div class="col text-end">
                                                            {{$booking->email}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            Phone Number
                                                        </div>
                                                        <div class="col text-end">
                                                            {{$booking->phone}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            Check-in
                                                        </div>
                                                        <div class="col text-end">
                                                            {{date("D, M j Y", strtotime($booking->check_in))}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            Check-out
                                                        </div>
                                                        <div class="col text-end">
                                                            {{date("D, M j Y", strtotime($booking->check_out))}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            Total Price
                                                        </div>
                                                        <div class="col text-end">
                                                            Rp. {{number_format($booking->total_harga)}}
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- end of single booking card --}}
            </div>
        </div>
    </div>

@endsection