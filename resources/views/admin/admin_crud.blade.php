@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('title', "Admin Home")

@section('content')
    <x-admin-navbar></x-admin-navbar>
    @livewire('admin-filter')
@endsection