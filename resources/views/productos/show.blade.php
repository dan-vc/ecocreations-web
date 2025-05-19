@extends('layouts.app')
@section('title', 'Detalle del Producto')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/detalle_producto.css') }}">
@endsection
@section('content')
    <section class="block-1">
        <section class="card-1">
            <img src="{{ $producto->imgproducto }}" alt="Foto desde Laravel" width="554" height="498">
        </section>

        <section class="card-2">
            <p class="text_1">{{ $producto->nomproducto }}</p>
            <p class="text_2">S/{{ number_format($producto->preproducto, 2) }}</p>
            <p class="text_3">Cantidad:</p>
            <section class="card-1-1">
                <button>+</button>
                <p>1</p>
                <button>-</button>
            </section>
            <section class="card-1-2">
                <p class="text_1">Descripción</p>
                <p class="text_2">{{ $producto->desproducto }}</p>
                <button>Agregar al Carrito</button>
            </section>
        </section>
    </section>

    <section class="hr">
        <hr>
    </section>

    <section class="block-2">
        <section class="texto">
            <p class="text_1">PRODUCTOS RECOMENDADOS</p>
        </section>

        <section class="card-1">

            @foreach ($productosRelacionados as $producto)
                <article class="card-1-1">
                    <section>
                        <img src="{{ $producto->imgproducto }}" alt="Foto desde Laravel" width="235"
                            height="232">
                        <p class="text_1">{{ $producto->nomproducto }}</p>
                        <p class="text_2">{{ $producto->desproducto }}</p>
                        <p class="text_3">S/{{ number_format($producto->preproducto, 2) }}</p>
                        <a href="{{ url('productos/' . $producto->idproducto) }}">COMPRAR</a>
                    </section>
                </article>
            @endforeach

        </section>

        <section class="hr">
            <hr>
        </section>
    </section>

    <section class="block-3">

        <article class="card-1">
            <img src="{{ asset('img/detalle_producto/confianza.png') }}" alt="Foto desde Laravel" width="179"
                height="173">
            <p class="text_1">CONFIANZA</p>
            <p class="text_2">Transparencia en el origen y proceso de nuestros productos reciclados.</p>
        </article>

        <article class="card-1">
            <img src="{{ asset('img/detalle_producto/pago en linea.png') }}" alt="Foto desde Laravel" width="179"
                height="173">
            <p class="text_1">PAGO EN LÍNEA</p>
            <p class="text_2">Comodidad y seguridad en tus transacciones.</p>
        </article>

        <article class="card-1">
            <img src="{{ asset('img/detalle_producto/puntualidad.png') }}" alt="Foto desde Laravel" width="179"
                height="173">
            <p class="text_1">PUNTUALIDAD</p>
            <p class="text_2">Apoya la economía circular y el cuidado del planeta.</p>
        </article>

        <article class="card-1">
            <img src="{{ asset('img/detalle_producto/tienda.png') }}" alt="Foto desde Laravel" width="179"
                height="173">
            <p class="text_1">RECOJO EN TIENDA</p>
            <p class="text_2"> Dale un toque original y consciente a tu día a día.</p>
        </article>

    </section>
@endsection
