<!DOCTYPE html>
<html lang="en">
@include('head')
<body class="hold-transition login-page">
    <a href="home"><button class="btn-home"><i class="fa fa-long-arrow-alt-left"></i> Back to Home</button></a>

    <div class="container text-center" >
        <img src="../images/space_doge.png" width="300px">
    </div> 
    <div class="center">
        
        <h1>Login</h1>
        @if(Session::get('fault'))
            <div class="alert alert-danger">
                {{Session::get('fault')}}
            </div>
        @endif
        <form method="POST" action="login_auth">
            @csrf
            <div class="txt_field">
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
            <div class="txt_field">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <span style="color: red">@error('password'){{$message}}@enderror</span>
            
            <div class="g-recaptcha" data-sitekey="{{$sitekey}}"></div>
            @if(Session::get('captcha_error'))
                <div class="alert alert-danger">{{Session::get('captcha_error')}}</div>
            @endif

            <input type="submit" value="Login">
            <div class="signup_link">Not a member? <a href="signup">Signup</a></div>
        </form>

        <script>
            function onSubmit(token) {
              document.getElementById("demo-form").submit();
            }
        </script>
    </div>
</body>
</html>
