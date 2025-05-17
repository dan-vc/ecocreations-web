@extends('layouts.app')
@section('title', 'Inicio')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-card.css') }}">
@endsection
@section('content')
    <section id="hero">
        <article class="container">
            <section class="content">
                <h1>Productos ecológicos a tu medida</h1>
                <p>Ofrecemos alternativas sostenibles para el día a día adaptadas a tus necesidades y gustos específicos.
                </p>
                <a href="#" class="btn">Descubre más</a>
            </section>
            <section class="media">
                <img src="img/banner-hero.png" alt="">
            </section>
        </article>
    </section>

    <section id="features">
        <article class="container">
            <ul>
                <li>
                    <img src="icons/headphones.svg" alt="">
                    <article>
                        <p>Atención las 24h</p>
                        <p>Soporte personalizado</p>
                    </article>
                </li>
                <li>
                    <img src="icons/headphones.svg" alt="">
                    <article>
                        <p>Atención las 24h</p>
                        <p>Soporte personalizado</p>
                    </article>
                </li>
                <li>
                    <img src="icons/headphones.svg" alt="">
                    <article>
                        <p>Atención las 24h</p>
                        <p>Soporte personalizado</p>
                    </article>
                </li>
                <li>
                    <img src="icons/headphones.svg" alt="">
                    <article>
                        <p>Atención las 24h</p>
                        <p>Soporte personalizado</p>
                    </article>
                </li>
            </ul>
        </article>
    </section>

    <section id="bentos">
        <article class="container">
            <section class="bento1">
                <img src="img/bento1.png" alt="">
                <article>
                    <p>Ofertas de Verano</p>
                    <span>50% Dsc en</span>
                    <h2>Bolsas Reciclables</h2>
                    <a href="#" class="btn btn-light">Comprar Ahora</a>
                </article>
            </section>
            <section class="bento2">
                <h2>Envío gratis en todo botellas</h2>
                <img src="img/bento2.png" alt="">
            </section>
        </article>
    </section>

    <section id="categories">
        <article class="container">
            <h2>Nuestras Categorías</h2>
            <section class="wrapper">
                <a href="#">
                    <img src="img/categoria-bolsas.png" alt="">
                    <p>Bolsas</p>
                </a>
                <a href="#">
                    <img src="img/categoria-botellas.png" alt="">
                    <p>Botellas</p>
                </a>
                <a href="#">
                    <img src="img/categoria-termos.png" alt="">
                    <p>Termos</p>
                </a>
                <a href="#">
                    <img src="img/categoria-esponjas.png" alt="">
                    <p>Esponjas</p>
                </a>
                <a href="#">
                    <img src="img/categoria-recipientes.png" alt="">
                    <p>Recipientes</p>
                </a>
            </section>
        </article>
    </section>

    <section id="cta">
        <article class="container">
            <img src="img/cta.png" alt="">

            <section class="content">
                <h2><span class="green">ECO</span>-Amigable</h2>
                <p>En Ecocreations, nos comprometemos con el medio ambiente ofreciendo productos 100% eco-amigables. Cada
                    artículo está cuidadosamente seleccionado para garantizar que puedas disfrutar de lo mejor de la
                    naturaleza sin comprometerla. </p>
                <a href="{{ url('nosotros') }}" class="btn btn-light">Leer más</a>
            </section>
        </article>
    </section>

    <section id="productos">
        <article class="container">
            <h2>Los más vendidos</h2>
            <ul class="wrapper">
                @for ($i = 0; $i < 8; $i++)
                    <li class="product-card">
                        <a href="">
                            <img src="img/producto-1.png" alt="">
                        </a>
                        <section class="product-card__content">
                            <article class="product-card__content-info">
                                <a href="#">
                                    <h3>Contenedor Hermético Cuadrado 500ml</h3>
                                </a>
                                <p>$13.00</p>
                            </article>
                            <img src="icons/shopping-cart.svg" alt="Agregar al Carrito" class="add-to-cart">
                        </section>
                    </li>
                @endfor
            </ul>
            <a href="#" class="btn btn-light">Ver más</a>
        </article>
    </section>

@endsection
