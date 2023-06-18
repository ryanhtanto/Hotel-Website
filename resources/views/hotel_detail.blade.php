@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/hotel_detail.css')}}">
@endpush

@section('title', "Hotel Detail")

@section('content')

<x-navbar></x-navbar>

<div class="text-center title">
    <h1>{{$hotel->hotel_name}}</h1>
    <p>{{$hotel->address}}</p>
</div>

{{-- carousel --}}
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($hotel_carousel as $key => $carousel)
                <div class="carousel-item test {{$key == 0 ? 'active' : ''}}">
                    <img src="{{url('images/Hotel/'.$carousel->carousel_images)}}" class="img-size">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="row">
            <div class="col">
                <h4>Rating :
                    @for ($i = 0; $i < $hotel->hotel_star; $i++)
                        <i class="fas fa-star star-icon"></i>
                    @endfor  
                </h4>
                
            </div>
            <div class="col d-flex justify-content-end">
                <h4  style="color: #fb700b">Rp. {{number_format($hotel->price)}}/night/room</h4>
            </div>
        </div>
    </div>
</div>
{{-- carousel end --}}

{{-- facility --}}
<div class="container text-center">
    <h2>Facility</h2>
    <hr>
    <div class="row">
        <div class="col">
            <i class = "fas fa-utensils icon-size"></i>
            <h3>Breakfast</h3>
            <p>Setiap pemesanan kamar sudah termasuk dengan 2 tiket sarapan pagi yang dimulai dari pukul 06.00 Wib sampai dengan pukul 10.00 Wib. </p>
        </div>
        <div class="col">
            <i class = "fas fa-swimming-pool icon-size"></i>
            <h3>Swiming pool</h3>
            <p>Pengunjung boleh menggunakan fasilitas kolam renang sesuai dengan jam operasi yang dimulai dari pukul 06.00 sampai dengan pukul 18.00. Pengunjung yang melakukan aktivitas berenang juga diberikan handuk yang berjumlah 2 buah.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <i class = "fas fa-broom icon-size"></i>
            <h3>Housekeeping</h3>
            <p>Pengunjung dapat memanggil housekeeping dengan cara menelfon melalui telepon yang sudah disediakan di kamar, pengungjung dapat meminta berbagai macam kebutuhan kamar serta meminta agar kamar dibersihkan.</p>
        </div>
        <div class="col">
            <i class = "fas fa-wifi icon-size"></i>
            <h3>Free Wi-fi</h3>
            <p>Layanan Wi-fi yang diberikan oleh pihak hotel dapat digunakan selama 24 jam non-stop di berbagai kawasan hotel dan penggunjung dapat menngunakan layanan Wi-fi secara gratis tanpa dipungut biaya apapun. </p>
        </div>
    </div>
</div>
{{-- facility end --}}


<div class="container">
    <h2 class="text-center">Check availability</h2>
    <hr>
    <div class="row">
        <div class="col text-center">
            <img class="hotel_room" src="{{asset('images/Hotel/hotel_room.jpg')}}">
        </div>
        @livewire('check-date', ['hotel' => $hotel,'id_hotel' => $hotel->id_hotel, 'room_available' => $hotel->room_available])
    </div>
</div>

    
@endsection