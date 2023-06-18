@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
@endpush

@section('title', "About Us")

@section('content')
<div class="container">
    <h1 class="heading text-center"><span>The</span>Hardworkers</h1>
    <h2 class="text-center">Our Story</h2>
    <hr>
    <p class="text-center">Perkenalkan kami dari kelompok The Hardworkers IF300-E Universitas Multimedia Nusantara.
    Kami beranggotakan tiga orang yang dengan nama anggota kelompok yaitu Matthew Marcellino, 
    Ryan Hertanto, dan Gerardo Jason Herman. Kelompok kami membuat website bertemakan pemesanan hotel. 
    Seperti yang kita tahu, Digitalisasi sangat berkembang pesat sekarang ini. Hampir segala aspek menyangkut mengenai digitalisasi.
    </p>
    <p class="text-center">Kelompok kami berinisiatif untuk memilih topik ini karena peluang pengenalan produk menggunakan media website sangat menarik perhatian customer. </p>
    <h4 class="text-center" style = "font-size: 22px;">Selamat Datang di Website The Hardworkers IF430-F</h4>
    <br>
    <div class="profiles">
      <div class="profile">
        <img src="{{asset('images/Team/img1.jpg')}}" class="profile-img">

        <h3 class="user-name">Matthew Marcellino (00000036291)</h3>
        <hr>
        <p>Perkenalkan nama saya Matthew Marcellino, dan berasal dari Bandung, Jawa Barat. Saya berumur hampir 20 tahun dan menempuh pendidikan di Universitas Multimedia Nusantara. Cita-cita saya adalah menjadi seorang blockchain developer yang handal. Hobi saya adalah bermain futsal, main game, trading, dan investasi cryptocurrency.</p>
      </div>
      <div class="profile">
        <img src="{{asset('images/Team/img2.jpg')}}" class="profile-img">

        <h3 class="user-name">Ryan Hertanto  (00000036526)</h3>
        <hr>
        <p>Perkenalkan nama saya Ryan Hertanto, dan berasal dari Pontianak, Kalimantan Barat. Saya berumur 19 tahun dan menempuh pendidikan di Universitas Multimedia Nusantara. Cita-cita saya adalah menjadi seorang yang handal dalam menangani big data. Hobi saya adalah berolahraga, menonton, tidur dan berinvestasi.</p>
      </div>
      <div class="profile">
        <img src="{{asset('images/Team/img3.jpg')}}" class="profile-img">

        <h3 class="user-name">Gerardo Jason Herman (00000036356)
        </h3>
        <hr>
        <p>Perkenalkan nama saya Gerardo Jason Herman, dan berasal dari Tangerang, Banten. Saya berumur hampir 20 tahun dan menempuh pendidikan di Universitas Multimedia Nusantara. Saya biasanya dipanggil jason. Cita-cita saya adalah membahagiakan orang tua saya. Hobi saya adalah bermain futsal dan bermain game.</p>
      </div>
    </div>
    <div class="text-center">
        <a href="{{url('home')}}"><button class="btn-home">Home</button></a>
      </div>
  </div>

@endsection