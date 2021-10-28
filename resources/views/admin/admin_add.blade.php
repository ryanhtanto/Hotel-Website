<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    <x-admin_navbar></x-admin_navbar>
    <div class="text-center title">
        <h1><b>Add {{$category}} Console</b></h1>
    </div>
    <div class="container">
        <form method="post" action="{{url('add_console')}}" enctype="multipart/form-data">
            @csrf
            @if ($msg = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $msg }}</strong>
                </div>
            @endif
            <input type="hidden" id="idCategory" name="id_category" value="{{$id_category}}">
            <div class="mb-3">
                <label for="consoleName" class="form-label">Console Name</label>
                <input type="text" class="form-control @error('console_name') is-invalid @enderror" id="consoleName" name="console_name">
                @error('console_name')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="price" name="harga">
                @error('harga')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="Description" name="deskripsi"></textarea>
                @error('deskripsi')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="images">
                <label class="input-group-text @error('images') is-invalid @enderror" for="inputGroupFile02" name="images">Upload</label>
                @error('images')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>