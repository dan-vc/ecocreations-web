@extends('layouts.app')
@section('title', 'Detalle del Producto')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/detalle_producto.css') }}">
@endsection
@section('content')
    <livewire:producto-detalle :id="$producto->idproducto"/>
@endsection
