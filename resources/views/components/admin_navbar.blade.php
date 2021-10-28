<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('admin')}}">
        <img src="{{url('/images/uas_logo_final.png')}}" width="55" height="auto" >
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-links">
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/add_game')}}">Add Games</a>
            </li>
            <li class="navbar-dropdown">
                <a href="#">Category</a>
                <div class="dropdown">
                    <a href="{{url('admin/console_crud/1')}}">Playstation</a>
                    <a href="{{url('admin/console_crud/2')}}">Nintendo</a>
                    <a href="{{url('admin/console_crud/3')}}">Xbox</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/customer_order')}}">Customer Order</a>
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