@extends('layouts.app')
@section('title', 'Carrito')
@section('styles')
    <link rel="stylesheet" href="/css/carrito.css">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/product-card.css">
@endsection
@section('content')
    <livewire:carrito />
@endsection
