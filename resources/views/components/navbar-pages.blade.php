
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{url('/images/uas_logo_final.png')}}" width="55" height="55" >
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-links">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
            </li>
            <li class="navbar-dropdown">
                <a href="#">Category</a>
                <div class="dropdown">
                    <a href="{{url('/console/playstation')}}">Playstation</a>
                    <a href="{{url('/console/nintendo')}}">Nintendo</a>
                    <a href="{{url('/console/xbox')}}">Xbox</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('order')}}">Your Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('about_us')}}">About Us</a>
            </li>
        </ul>
    </div>
    <div class="float-right" id="navbarNav">
        <ul class="navbar-nav">
            @if (!session()->has('user'))
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/signup">Sign Up</a>
              </li>
            @endif
            
            @if (session()->has('user'))
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome, {{session('user')->first_name}}!
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out-alt"></i> Logout</a>
                </div>
              </li>
              
            @endif
        </ul>
    </div>
</nav>
