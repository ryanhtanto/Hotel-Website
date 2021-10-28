<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <x-admin_navbar></x-admin_navbar>
    <div class="container">  
        <div class="col">
            <form  method="post" action="{{url('add_game')}}">
                @csrf
                <div class="mb-3">
                    <label for="id_console" class="form-label">Console Name</label>
                    <select class="form-control" name="id_console" id="id_console">
                        @foreach ($consoles as $console)
                            <option value="{{$console['id_console']}}">{{$console['console_name']}}</option>
                        @endforeach
                    </select>
                    @error('id_console')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="game" class="form-label">Game Name</label>
                    <input type="text" class="form-control @error('game_name') is-invalid @enderror" id="game" name="game_name">
                    @error('game_name')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                @if ($msg = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $msg }}</strong>
                    </div>
                @endif
                @if ($msg = Session::get('alert'))
                    <div class="alert alert-danger">
                        <strong>{{ $msg }}</strong>
                    </div>
                @endif
            </form>
        </div>
    </div>
</body>
</html>