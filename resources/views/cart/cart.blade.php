<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <x-navbar-pages></x-navbar-pages>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        @if (session()->has('cart'))
                            @foreach (session('cart') as $cart)
                                <table class="table table-borderless table-shopping-cart">
                                    <thead class="text-muted">
                                        <tr class="small text-uppercase">
                                            <th scope="col">Product</th>
                                            <th scope="col" width="120">Quantity</th>
                                            <th scope="col" width="120">Price</th>
                                            <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside">
                                                        <img src={{ url('images/info/'.$cart['images'])}} class="img-sm" alt="">
                                                    </div>
                                                    <figcaption class="info"> 
                                                        <span class="title text-dark" data-abc="true">{{$cart['console_name']}}</span>
                                                        <p class="text-muted small">GAME 1: {{$cart['game1']}}</p>
                                                        <p class="text-muted small">GAME 2: {{$cart['game2']}}</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> 
                                                <span class="title text-dark" data-abc="true">1</span>
                                            </td>
                                            <td>
                                                <div class="price-wrap"> 
                                                    <var class="price">Rp. {{number_format($cart['harga'],2)}}</var> 
                                                    <small class="text-muted"> / day </small> 
                                                </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> 
                                                <a href="/remove/{{$cart['id_console']}}" class="btn btn-light" data-abc="true">Remove</a> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                            @endforeach 
                        @else
                            <div class="text-center empty-cart">
                                <h3>Your cart is empty.</h3>
                            </div>
                        @endif  
                    </div>
                </div>
                <br>
                <div class="float-right">
                    <form action="calculate_cart" method="POST">
                        @csrf
                        <label for="duration">Duration (day)</label>
                        <input class="form-control" type="number" id="duration" name="duration" min="1">
                        <span style="color: red">@error('duration'){{$message}}@enderror</span>
                        @if (Session::get('missing_item'))
                            <span style="color: red">{{Session::get('missing_item')}}</span>
                        @endif
                        
                        <br>
                        <button class="btn btn-info" type="submit">Calculate total</button>
                    </form>
                </div>
                <br>
            </aside>
            <aside class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd class="text-right ml-3">
                                @if (session()->has('cart_total'))
                                Rp. {{number_format(session('cart_total'),2)}}
                                @else
                                -
                                @endif
                            </dd>
                        </dl>
                        <hr> 
                        <a href="checkout" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Order </a>
                        @if (Session::get('fail'))
                            <span style="color: red">{{Session::get('fail')}}</span>
                        @endif
                        @if (Session::get('success'))
                            <br>
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <a href="home" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Back to Home</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</body>
</html>
    