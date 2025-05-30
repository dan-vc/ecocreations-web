@extends('layouts.app')
@section('title', 'Carrito')
@section('styles')
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/checkout.css">
@endsection
@section('content')
    <livewire:checkout />
@endsection
