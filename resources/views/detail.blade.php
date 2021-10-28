<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    <x-navbar-pages></x-navbar-pages>
    
    <div class="container">
        <!-- Left Column / Headphones Image -->
        <div class="row">
            <div class="col-5">
                <img src="{{ asset('/images/'.$category.'/'. $data_console->images)}}" class="card-img-top" alt="" style="width:400px; height: 400px;">
            </div>
            <div class="col-5 offset-md-1">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{$data_console->console_name}}</h5>
                    <p class="card-text">{{$data_console->deskripsi}}</p>
                    <p class="font-monospace">Rp. {{number_format($data_console->harga, 2)}}/day</p>
                    <form action="{{url('add-to-cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_console" value="{{$data_console->id_console}}">
                        <input type="hidden" name="console_name" value="{{$data_console->console_name}}">
                        <input type="hidden" name="harga" value="{{$data_console->harga}}">
                        <input type="hidden" name="images" value="{{$data_console->images}}">
                        <div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"  class="form-label">Choose your first game :</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="game1">
                                    @foreach ($games as $game)
                                        <option>{{$game->game_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"  class="form-label">Choose your Second game :</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="game2">
                                    @foreach ($games as $game)
                                        <option>{{$game->game_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <span class="text-muted" style="font-size: 12px;">*Note : first 2 game is free!</span>
                        <hr>
                        <br>
                        @if (Session::get('login_first'))
                            <div class="alert alert-warning">
                                {{ Session::get('login_first') }}
                            </div>
                        @endif
                        @if (Session::get('duplicate'))
                            <div class="alert alert-danger">
                                {{ Session::get('duplicate') }}
                            </div>
                        @endif
                        @if (Session::get('same_game'))
                            <div class="alert alert-danger">
                                {{ Session::get('same_game') }}
                            </div>
                        @endif
                        <div class="product-price">
                            <button type="submit" class="cart-btn">Add to cart</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>


