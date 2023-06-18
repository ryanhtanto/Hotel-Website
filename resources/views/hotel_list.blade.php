@extends('components.template')

@push('css')
    <link rel="stylesheet" href="{{asset('css/hotel_list.css')}}">
@endpush

@section('title', "Hotel List")

@section('content')
    <x-navbar></x-navbar>
    @livewire('browse-hotels')
@endsection