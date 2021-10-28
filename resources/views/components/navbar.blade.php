<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#">
        <img src="{{url('/images/uas_logo_final.png')}}" width="75" height="75">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="console/playstation">Playstation</a>
                <a class="dropdown-item" href="console/nintendo">Nintendo</a>
                <a class="dropdown-item" href="console/xbox">Xbox</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order">Your Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us">About Us</a>
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
