@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('title', "Add Location")

@section('content')
    <x-admin-navbar></x-admin-navbar>
    <div class="container">
        <form method="post" action="{{url('add_location')}}">
            @csrf
        
            @if ($msg = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $msg }}</strong>
                </div>
            @endif
            @error('location')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            <div class="mb-3">
                <label for="addLocation" class="form-label">Location Name</label>
                <input type="text" class="form-control" id="addLocation" name="location">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection