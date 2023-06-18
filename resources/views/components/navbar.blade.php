<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow" id="navbar">
    <div class="container-fluid">
        <a href="/home"><img class="navbar-brand" src="{{url('/images/logo.png')}}" width="60" height="auto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/booking_history')}}">Booking History</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{url('/hotels')}}">Browse Hotels</a>
              </li>
            </ul>
        </div>
        <div class="float-right" id="navbarNav">
          <ul class="navbar-nav">
              @if (!session()->has('user'))
                <li class="nav-item">
                  <a class="nav-link active" href="/login_signup">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/login_signup">Sign Up</a>
                </li>
              @endif
              
              @if (session()->has('user'))
                <div class="dropdown">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; text-decoration: none;">
                     Welcome, {{session('user')->name}}!
                  </a>
                
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item " href="{{url('profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a class="dropdown-item " href="{{url('logout')}}"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                  </ul>
                </div>
              @endif
          </ul>
        </div>
    </div>
</nav>