<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> --}}
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link rel="stylesheet" href="{{asset('css/login_signup.css')}}" />
        <title>Login & Register</title>
    </head>

    <body >
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    {{-- form sign-up --}}
                    <form method="post" action="{{url('addUser')}}" class="sign-up-form" enctype="multipart/form-data">
                        @csrf
                        <h2 class="title">Sign up</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Name" required name="name"/>
                        </div>
                        <span style="color: red">@error('name'){{$message}}@enderror</span>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" required name="email"/>
                        </div>
                        <span style="color: red">@error('email'){{$message}}@enderror</span>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" required name="password"/>
                        </div>
                        <span style="color: red">@error('password'){{$message}}@enderror</span>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Re-Password" required name="coPassword"/>
                        </div>
                        <span style="color: red">@error('coPassword'){{$message}}@enderror</span>
                        <div class="input-field">
                            <i class="fas fa-phone"></i>
                            <input type="text" placeholder="Phone Number" required name="phoneNumber"/>
                        </div>
                        <span style="color: red">@error('phoneNumber'){{$message}}@enderror</span>
                        <div class="input-field">
                            <i class="fas fa-calendar-day"></i>
                            <input type="date" placeholder="Day" required name="birthDate"/>
                        </div>
                        <span style="color: red">@error('birthDate'){{$message}}@enderror</span>
                        <div class="input-field">
                            <i class="fas fa-camera"></i>
                            <input type="file" class="form-control" id="inputGroupFile02" name="images">
                        </div>     
                        <span style="color: red">@error('images'){{$message}}@enderror</span>
                        
                        <button type="submit" class="btn">Sign Up</button>
                    </form>

                    {{-- form sign-in --}}
                    <form  method="post" action="user_login" class="sign-in-form">  
                        @csrf
                        <h2 class="title">Sign in</h2>
                        @if ($msg = Session::get('success'))
                            <div>
                                <strong style="color: #72ed8a">{{ $msg }}</strong>
                            </div>
                        @endif
                        @if ($msg = Session::get('fault'))
                            <div>
                                <strong style="color: red">{{ $msg }}</strong>
                            </div>
                        @endif

                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" name="email" required />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="password"required />
                        </div>
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LcjHgEbAAAAAN0SDLg5o7UhF5s5ikYt4jler3oK"></div>
                        @if(Session::get('captcha_error'))
                            <span style="color: red">{{Session::get('captcha_error')}}</span>
                        @endif
                        <button type="submit" value="Login" class="btn solid">Submit</button>
                    </form>
                </div>
            </div>
      
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Pengguna baru ?</h3>
                        <p>
                            Mencari hotel untuk penginapan dengan pemesanan yang dapat dipercaya? Disini jawabannya
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Sign up
                        </button>
                    </div>
                    <img src="img/lab.png" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Sudah menjadi bagian dari kami ?</h3>
                        <p>
                            Selamat datang di website booking hotel terpercaya dan terbaik di seluruh indonesia.
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Sign in
                        </button>
                    </div>
                    <img src="{{asset('images/logo.png')}}" class="image"/>
                </div>
            </div>
        </div>

        <script>
            const sign_in_btn = document.querySelector("#sign-in-btn");
            const sign_up_btn = document.querySelector("#sign-up-btn");
            const container = document.querySelector(".container");

            sign_up_btn.addEventListener("click", () => {
                container.classList.add("sign-up-mode");
            });

            sign_in_btn.addEventListener("click", () => {
                container.classList.remove("sign-up-mode");
            });
        </script>
    </body>
</html>