<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
    <x-admin_navbar></x-admin_navbar>
    
    <div class="container-fluid">
        <a href="{{url('admin/console_add/'.$id_category)}}"><button class="btn btn-success float-right"><i class="fa fa-plus"></i> Add Console</button></a>
        <br><br>
        <table class="table table-light table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Console Name</th>
                    <th scope="col">Price</th>
                    <th scope="col" style="width: 40%">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consoles as $console)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('/images/'.$category.'/'. $console->images)}}">
                        </td>
                        <td>{{$console->console_name}}</td>
                        <td>Rp. {{number_format($console->harga, 2)}}</td>
                        <td>{{$console->deskripsi}}</td>
                        <td>
                            <a href="{{url('admin/console_edit/'.$console->id_console)}}"><button class="btn btn-info">Edit</button></a>
                            <a href="{{url('admin/console_delete/'.$console->id_console)}}"><button class="btn btn-danger">Delete</button></a> 
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>

        @if ($msg = Session::get('delete'))
        <div class="alert alert-danger float-right">
            <strong>{{ $msg }}</strong>
        </div>
        @endif
    </div>
    
</body>
</html>