<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <div id="fullpage">
        {{-- title pada homepage --}}
        <div class="section container-fluid home-main">
            <x-navbar></x-navbar>
            <div class="container" style="margin-top: 30px">
                <div class="row">
                    <div class="col-5">
                        <img src="{{url('/images/ps5.png')}}" height="500" width="auto">
                    </div>
                    <div class="col-7">
                        <div class="vertical-center">
                            <h1 class="home-title"><b>Space Doge Console Rent</b></h1>
                            <h4 class="home-desc">Experience console gaming like never before</h4>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
        {{-- end of title pada homepage --}}

        {{-- slide 1 pada homepage --}}
        <div class="section container-fluid home-slide1">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-4 text-center">
                    <div class="ps-text">
                        <img class="" src="{{url('/images/playstation_logo.png')}}" width="500px">
                        <h4><b>Play Has No Limits™</b></h4>
                        <a href="console/playstation"><button class="btn-ps">Browse More</button></a>
                    </div>
                </div>
                <div class="col-7 text-center" style="margin-top: 100px">
                    <img src="{{url('/images/Playstations_section.png')}}" width="760px">
                </div>
            </div>
        </div>
        {{-- end of slide 1 pada homepage --}}

        {{-- slide 2 pada homepage --}}
        <div class="section container-fluid home-slide2">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5 text-center">
                    <img src="{{url('/images/Nintendo_section.png')}}" width="600x">
                </div>
                <div class="col-6 text-center">
                    <div class="nintendo-text" style="margin-top: 30%">
                        <img src="{{url('/images/nintendo_logo.png')}}" width="500px">
                        <h4 style="color: white"><b>THERE'S NO PLAY LIKE IT.</b></h4>
                        <a href="console/nintendo"><button class="btn-nintendo">Browse More</button></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of slide 2 pada homepage --}}

        {{-- slide 3 pada homepage --}}
        <div class="section container-fluid home-slide3">
            <div class="row">
                
                <div class="col-5 text-center">
                    <img src="{{url('/images/xbox_logo.png')}}" width="350px">
                    <h4 style="color: white">Power Your Dreams.</h4>
                    <a href="console/xbox"><button class="btn-xbox">Browse More</button></a>
                </div>
                <div class="col-6 text-center">
                    <img src="{{url('/images/xbox-console.png')}}" width="850px">
                </div>
            </div>
        </div>
        {{-- end of slide 3 pada homepage --}}
    </div>
    <x-cart-button></x-cart-button>
    
    <script>
        new fullpage('#fullpage', {
            navigation: true,
            navigationTooltips: ['Home', 'Playstation', 'Nintendo', 'Xbox'],
            keyboardScrolling: true,
        });
    </script>
    
</body>
</html>