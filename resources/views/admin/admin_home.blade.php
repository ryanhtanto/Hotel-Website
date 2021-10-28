<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <x-admin_navbar></x-admin_navbar>
    <div class="text-center title">
        <h1><b>Choose Category</b></h1>
    </div>
    <div class="container-fluid">
        <div class="row category text-center">
            <div class="col center">
                <a href="admin/console_crud/1"><img src="{{url('/images/playstation_logo.png')}}" width="100%"></a>
            </div>
            <div class="col center">
                <a href="admin/console_crud/2"><img src="{{url('/images/nintendo_logo.png')}}" width="100%"></a>
            </div>
            <div class="col center">
                <a href="admin/console_crud/3"><img src="{{url('/images/xbox_logo.png')}}" width="100%"></a>
            </div>
        </div>
    </div>
</body>
</html>