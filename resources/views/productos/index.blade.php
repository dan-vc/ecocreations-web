@extends('layouts.app')
@section('title', 'Productos')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-card.css') }}">
@endsection
@section('content')
    <section id="productos">
        <article class="container">
            <h2>Nuestros Productos</h2>
            <ul class="wrapper">
                @foreach ($productos as $producto)
                    <li class="product-card">
                        <a href="">
                            <img src="{{ $producto->imgproducto }}" alt="">
                        </a>
                        <section class="product-card__content">
                            <article class="product-card__content-info">
                                <a href="#">
                                    <h3>{{ $producto->nomproducto }}</h3>
                                </a>
                                <p>${{ $producto->preproducto }}</p>
                            </article>
                            <img src="/icons/shopping-cart.svg" alt="Agregar al Carrito" class="add-to-cart">
                        </section>
                    </li>
                @endforeach
            </ul>
            <a href="#" class="btn btn-light">Ver más</a>
        </article>
    </section>

@endsection
