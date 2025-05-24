@extends('layouts.app')
@section('title', 'Carrito')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
@endsection
@section('content')
    <livewire:carrito />
@endsection
