<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <x-navbar-pages></x-navbar-pages>
    <x-cart-button></x-cart-button>
    {{-- carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{url('/images/carousel/1.jpg')}}" class="d-block w-100" alt="...">
            <div class="centered-right" style="color : white">
                <h2>EA SPORTS FIFA 21</h2>
                <p>Take on everything from street football to official <br> global competitions including the UEFA Champions League.</p>
                <a href="#section2" class="btn btn-primary btn-sm fw-bold" style="border-radius:20px">Rent now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('/images/carousel/2.jpg')}}" class="d-block w-100" alt="...">
            <div class="centered-left" style="color : white; top : 45%">
                <h2>Resident Evil <br>VILLAGE</h2>
                <p>Experience survival horror like never before<br> in the eighth major instalment in the storied Resident Evil franchise </p>
                <a href="#section2" class="btn btn-primary btn-sm fw-bold" style="border-radius:20px">Rent now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('/images/carousel/3.jpg')}}" class="d-block w-100" alt="...">
            <div class="centered-left" style="color : white">
                <h2>Marvel's Spider-Man: <br>Miles Morales</h2>
                <p>Experience the rise of Miles Morales as the new hero masters incredible,<br> explosive new powers to become his own Spider-Man.</p>
                <a href="#section2" class="btn btn-primary btn-sm fw-bold" style="border-radius:20px">Rent now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('/images/carousel/4.jpg')}}" class="d-block w-100" alt="...">
            <div class="centered-left" style="color : white; top : 45%">
                <h2>Crash Bandicoot 4 : <br>It's About Time</h2>
                <p>It's About Time – for a brand-wumping-new Crash Bandicoot game!<br> Crash forward into a time-shattered adventure with your favourite marsupials.</p>
                <a href="#section2" class="btn btn-primary btn-sm fw-bold" style="border-radius:20px">Rent now</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- end of carousel --}}
    

    <!-- jumbotron -->
    <div class="jumbotron" id="section2">
        <h2 class="display-4 text-center">Introducing PlayStation</h2>
        <h3 class="text-center" style="color: #455eba;">Play Has No Limit</h3>
        <p class="text-muted text-center">Unleash new gaming possibilities that you never anticipated</p>
        @foreach ($consoles as $console)
            <hr class="my-4">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('/images/Playstation/'. $console->images)}}" class="card-img-top" alt="" style="width:400px; height: auto;">
                    </div>
                    <div class="col-4">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{$console->console_name}}</h5>
                            <p class="card-text">{{$console->deskripsi}}</p>
                            <p class="font-monospace">Rp. {{number_format($console->harga, 2)}}/day</p>
                            <a href ="/console_detail/{{$console -> id_console}}"class="btn btn-primary btn-sm fw-bold" style="border-radius:20px">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- akhir jumbotron -->
</body>
</html>
