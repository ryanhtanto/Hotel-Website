@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('title', "Home")

@section('content')
    {{-- carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="height : 100vh;">
        <x-navbar-home></x-navbar-home>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{url('/images/carousel/bali.jpg')}}');" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Apurva Kempinski Bali</h5>
                    <p>The Apurva Kempinski Bali offers luxurious stays in Nusa Dua.</p>
                    <a href="hotels"><button class="btn btn-outline-light">Browse Hotels</button></a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{url('/images/carousel/jogja.jpg')}}');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hotel Tentrem Yogyakarta</h5>
                    <p>Hotel Tentrem Yogyakarta is a perfect combination of luxury Javanese culture</p>
                    <a href="hotels"><button class="btn btn-outline-light">Browse Hotels</button></a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{url('/images/carousel/jakarta.jpg')}}');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hotel Indonesia Kempinski Jakarta</h5>
                    <p>Modern elegance is refined with flourishes of Indonesiaa culture in our rooms</p>
                    <a href="hotels"><button class="btn btn-outline-light">Browse Hotels</button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- carousel end --}}

    <div class="container">
        <h3 class="text-center">Why book with ShibaVacation?</h3>
        <hr>
        <section class = "services sec-width" id = "services">
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon icon">
                        <span>
                            <i class="fas fa-money-check-alt"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Best Price</h2>
                        <p>Competitive price from extensive network budget hotels to 5 star hotels such as Ibis, Amaris, Santika Hotel with best price guarantee.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon icon">
                        <span>
                            <i class="fas fa-cash-register"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Various Payment Options</h2>
                        <p>Be more flexible with various payment methods from ATM Transfer, Credit Card, to Internet Banking.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon icon">
                        <span>
                            <i class="fas fa-scroll"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Stay Guarantee</h2>
                        <p>You're guaranteed a hotel stay, period. In the event of overbooked rooms or problems with your booking, we'll recommend a similar hotel for you at no additional costs. Or your money back.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon icon">
                        <span>
                            <i class="fas fa-hotel"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Hotel Partners</h2>
                        <p>We are partnering with hotel chains across the globe to ensure a comfortable stay wherever you travel!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>
        <div class="container my-4">
            <div class="row">
                <div class="col">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                        <h4>Don't Worry, Be Happy </h4>
                        <p>Enjoy your holiday and staycation only on Shibavacation</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style=" border: none; width: 18rem;">
                        <img src="{{url('/images/home/jakarta.jpg')}}" class="card-img-top" alt="..." style="height: 270px">
                        <div class="card-body">
                        <h5 class="card-title">Beach</h5>
                        <p class="card-text">Enjoy your Summer holiday in Bali</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border: none; width: 18rem;">
                        <img src="{{url('/images/home/jogja.jpg')}}" class="card-img-top" alt="..."  style="height: 270px">
                        <div class="card-body">
                        <h5 class="card-title">Panorama</h5>
                        <p class="card-text">Relaxing your self with beautiful panorama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container about-team">
        <div class="row">
            <div class="col-5" data-aos-easing="ease-in-back" data-aos-delay="1200" data-aos-offset="0">
                <img src="{{asset('images/logo.png')}}" width="100%" data-aos="fade-zoom-in">
            </div>
            <div class="col-7 text-center d-flex align-items-center justify-content-center">
                <div>
                    <h2>Learn more about the team!</h2><br>
                    <a href="about_us"><button class="btn-about-us"><i class="fas fa-users"></i><b> About Us</b></button></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
      
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-100px";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
@endsection