<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    <x-admin_navbar></x-admin_navbar>
    <div class="container">
        <form method="POST" action="{{url('edit_console')}}" enctype="multipart/form-data">
            @csrf
            
            @if ($msg = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $msg }}</strong>
                </div>
            @endif
            <input type="hidden" name="id_console" value="{{$data_console->id_console}}">
            <input type="hidden" name="id_category" value="{{$data_console->id_category}}">
            <div class="mb-3">
                <label for="consoleName" class="form-label">Console Name</label>
                <input type="text" class="form-control" id="consoleName" name="console_name" value="{{$data_console->console_name}}">
                <span style="color: red">@error('console_name'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="harga" value="{{$data_console->harga}}">
                <span style="color: red">@error('harga'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="Description" name="deskripsi">{{$data_console->deskripsi}}</textarea>
                <span style="color: red">@error('deskripsi'){{$message}}@enderror</span>
            </div>
            <div class="input-group mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/'.$category.'/'.$data_console->images)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <input type="file" class="form-control" id="inputGroupFile02" name="images">
                        <label class="input-group-text" for="inputGroupFile02" name="images">Upload</label>
                    </div>       
                    <span style="color: red">@error('images'){{$message}}@enderror</span>
                </div> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>