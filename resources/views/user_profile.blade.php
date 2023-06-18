@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('title', "User Profile")

@section('content')
    <x-navbar></x-navbar>
    <div class="container" style="margin-top: 120px">
        <h2 class="text-center"><b>User Profile</b></h2>
        <br>
        <form action="edit_profile" class="text-center" method="post" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <img class="text-center" src="{{asset('images/Users/'.session('user')->images)}}" width="250px" height="250px" style="object-fit: cover; border-radius: 50%">
            </div>
            <br>
            <label for="name">Name</label>
            <input class="form-control" type="text" placeholder="Name" name="name" value="{{session('user')->name}}">
            <br>
            <label for="email">Email</label>
            <input class="form-control" type="email" value="{{session('user')->email}}">
            <br>
            <label for=""></label>
        </form>
    </div>
@endsection