<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
        <img class="navbar-brand" src="{{url('/images/logo.png')}}" width="60" height="auto" >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('admin_crud')}}">Admin Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('add_hotel_index')}}">+Add Hotel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('add_location_index')}}">+Add Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('add_carousel_index')}}">+Add Carousel Image</a>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>