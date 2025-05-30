@extends('layouts.app')
@section('title', 'Productos')
@section('styles')
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/productos.css">
    <link rel="stylesheet" href="/css/product-card.css">
@endsection
@section('content')
    <section id="categories">
        <article class="container">
            <h2>Nuestras Categorías</h2>
            <section class="wrapper">
                @foreach ($categorias as $categoria)
                    @php
                        switch ($categoria->nomcategoria) {
                            case 'Bolsas':
                                $imagen = 'img/categoria-bolsas.png';
                                break;
                            case 'Botellas':
                                $imagen = 'img/categoria-botellas.png';
                                break;
                            case 'Termos':
                                $imagen = 'img/categoria-termos.png';
                                break;
                            case 'Artículos del Hogar':
                                $imagen = 'img/categoria-hogar.png';
                                break;
                            case 'Recipientes':
                                $imagen = 'img/categoria-recipientes.png';
                                break;
                        }
                    @endphp

                    <a href="{{ url('productos/categoria/' . $categoria->idcategoria) }}" class="category-card">
                        <img src="{{ asset($imagen) }}" alt="">
                        <p>{{ $categoria->nomcategoria }}</p>
                    </a>
                @endforeach
            </section>
        </article>
    </section>

    <section id="productos">
        <article class="container">
            @if ($productos->isEmpty())
                <h2>No se encontraron productos.</h2>
            @else
                <h2>Nuestros Productos - @if (isset($categoriaSeleccionada))
                        {{ $categoriaSeleccionada->nomcategoria }}
                    @else
                        Todas las Categorías
                    @endif
                </h2>
            @endif
            <ul class="wrapper">
                @foreach ($productos as $producto)
                    <li class="product-card">
                        <a href="{{ url('productos/' . $producto->idproducto) }}">
                            <img src="{{ $producto->imgproducto }}"
                                alt="Vaso">
                            </a>
                        <a href="{{ url('productos/' . $producto->idproducto) }}">
                            <h3>{{ $producto->nomproducto }}</h3>
                        </a>
                        <p>{{ $producto->desproducto }}</p>
                        <span class="product-price">S/{{ number_format($producto->preproducto, 2) }}</span>
                        <button class="add-to-cart-btn" wire:click="agregar({{ $producto->idproducto }})">AGREGAR AL
                            CARRITO</button>
                    </li>
                @endforeach
            </ul>

            <!-- Verificamos si existe paginacion -->
            @if (method_exists($productos, 'links'))
                <div class="paginacion">
                    {{ $productos->links('components.pagination') }}
                </div>
            @endif
        </article>
    </section>
@endsection
