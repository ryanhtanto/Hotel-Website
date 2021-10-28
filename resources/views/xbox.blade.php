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
            <img src="{{url('/images/carousel/xbox_1.jpg')}}" class="d-block w-100" alt="...">
            <div class="centered-left" style="color : white">
                <h2>BIOMUTANT®</h2>
                <p>BIOMUTANT® is an open-world, post-apocalyptic Wung-Fu <br> fable RPG, with unique martial art styled combat system allowing you <br> to mix melee, shooting, and mutant ability action.</p>
                <a href="#section2" class="btn btn-primary btn-sm fw-bold" style="border-radius:20px">Rent now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('/images/carousel/xbox_2.webp')}}" class="d-block w-100" alt="...">
            <div class="centered-left" style="color : white; top : 45%">
                <h2>Subnautica: Below Zero</h2>
                <p>Dive into a freezing underwater adventure on an alien planet. <br> Below Zero is set two years after the original Subnautica.</p>
                <a href="#section2" class="btn btn-primary btn-sm fw-bold" style="border-radius:20px">Rent now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('/images/carousel/xbox_3.jpg')}}" class="d-block w-100" alt="...">
            <div class="centered-left" style="color : white">
                <h2>Call of Duty®: Modern Warfare®</h2>
                <p>PREPARE TO GO DARK, MODERN WARFARE® IS BACK!</p>
                <a href="#section2" class="btn btn-primary btn-sm fw-bold" style="border-radius:20px">Rent now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('/images/carousel/xbox_4.jpg')}}" class="d-block w-100" alt="...">
            <div class="centered-right" style="color : white; top : 45%">
                <h2>NBA 2K21</h2>
                <p>NBA 2K21 offers one-of-a-kind immersion into all facets of <br> NBA basketball and culture – where Everything is Game.</p>
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
        <h2 class="display-4 text-center">Introducing Xbox</h2>
        <h3 class="text-center" style="color: #455eba;">Power Your Dreams.</h3>
        <p class="text-muted text-center">Unleash new gaming possibilities that you never anticipated</p>
        @foreach ($consoles as $console)
            <hr class="my-4">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('/images/Xbox/'. $console->images)}}" class="card-img-top" alt="" style="width:400px; height: auto;">
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