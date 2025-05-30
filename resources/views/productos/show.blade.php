@extends('layouts.app')
@section('title', 'Detalle del Producto')
@section('styles')
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/detalle_producto.css">
    <link rel="stylesheet" href="/css/product-card.css">
@endsection
@section('content')
    <livewire:producto-detalle :id="$producto->idproducto" />
@endsection
