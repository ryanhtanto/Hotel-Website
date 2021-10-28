<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <a href="/"><button class="btn-home"><i class="fa fa-long-arrow-alt-left"></i> Back to Home</button></a>
    <div class="text-center title">
        <img src="{{asset('/images/space_doge.png')}}" width="270px">
    </div>
    <div class="container text-center signup-header">
        <h1><b>Sign Up<b></h1>
    </div>
    <div class="container signup-box">
        <form action="addUser" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name" placeholder="John">
                    <span style="color: red">@error('first_name'){{$message}}@enderror</span>
                </div>
                <div class="col">
                    <label for="last_name">Last Name</label>
                    <input class="form-control" type="text" name="last_name" placeholder="Doe">
                    <span style="color: red">@error('last_name'){{$message}}@enderror</span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-7">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" placeholder="xxxxx@yourmail.com">
                    <span style="color: red">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="col-5">
                    <label for="phone">Phone Number</label>
                    <input class="form-control" type="text" name="phone" placeholder="08xxxxxxxxxx">
                    <span style="color: red">@error('phone'){{$message}}@enderror</span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label for="birth_date">Date of Birth</label>
                    <input class="form-control" name="birth_date" type="date" min="1920-01-01" max="2011-01-01">
                    <span style="color: red">@error('birth_date'){{$message}}@enderror</span>
                </div>
                <div class="col-8">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" name="address" placeholder="Street name, House number, City">
                    <span style="color: red">@error('address'){{$message}}@enderror</span>
                </div>
            </div>
            <br>
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Min. 8 characters">
            <span style="color: red">@error('password'){{$message}}@enderror</span>
            <br>
            <div class="text-center">
                <button class="btn-signup" type="submit"><b>Sign Up</b></button>
            </div>
        </form>
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            <a href="login">Go to login page</a>
        </div>
        @endif
    </div>
</body>
</html>