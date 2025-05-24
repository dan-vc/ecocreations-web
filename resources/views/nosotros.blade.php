@extends('layouts.app')
@section('title', 'Nosotros')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endsection
@section('content')
    <section id="hero">
        <article class="container">
            <section class="content">
                <h1>ECOCREATIONS S.A.C</h1>
                <p>En Ecocreations S.A.C., nos dedicamos a ofrecer productos innovadores y de alta calidad, elaborados a
                    partir de materiales reciclados. Entendemos la importancia de un consumo responsable y un futuro más
                    verde, por lo que transformamos residuos en soluciones prácticas y con estilo, como tápers, bolsas,
                    termos, botellas y recipientes únicos.
                </p>
                <div class="botones">
                    <a href="{{ url('contacto') }}" class="btn">CONTÁCTANOS</a>
                    <a class="btn-2" href="{{ url('productos') }}">VER PRODUCTOS</a>
                </div>
            </section>
            <section class="media">
                <img src="img/nosotros/bolsa.png" alt="">
            </section>
        </article>
    </section>



    <section class="block-1">
        <p class="text-1">CONOCE NUESTROS VALORES</p>
        <section class="block-1-cards">
            <article class="card">
                <img src="img//nosotros/creatividad.png" alt="">
                <p class="text-1">Creatividad</p>
                <p class="text-2">Transformando materiales reciclados en productos originales y funcionales con diseños
                    innovadores.
                </p>
            </article>

            <article class="card">
                <img src="img/nosotros/sostenibilidad.png" alt="">
                <p class="text-1">Sostenibilidad</p>
                <p class="text-2">Compromiso firme con el cuidado del medio ambiente a través del reciclaje y la
                    reutilización.
                </p>
            </article>

            <article class="card">
                <img src="img/nosotros/calidad.png" alt="">
                <p class="text-1">Calidad</p>
                <p class="text-2">Elaboración de productos duraderos y confiables, garantizando su uso a largo plazo.
                </p>
            </article>

            <article class="card">
                <img src="img/nosotros/responsabilidad.png" alt="">
                <p class="text-1">Responsabilidad</p>
                <p class="text-2">Actuando de manera ética y transparente en cada etapa de nuestro proceso productivo y
                    comercial.
                </p>
            </article>
        </section>
    </section>

    <section class="block-2">
        <section class="block-2-cards">
            <article class="card-1">
                <p class="text-1">Nuestra Misión</p>
                <p class="text-2">Impulsar un futuro sostenible ofreciendo soluciones creativas y funcionales para el
                    hogar y el día a día,
                    elaboradas a partir de materiales reciclados. Buscamos inspirar un consumo consciente y responsable,
                    demostrando que la reutilización puede ser sinónimo de calidad, diseño y practicidad.</p>
            </article>

            <article class="card-2">
                <p class="text-1">Nuestra Misión</p>
                <p class="text-2">Impulsar un futuro sostenible ofreciendo soluciones creativas y funcionales para el
                    hogar y el día a día,
                    elaboradas a partir de materiales reciclados. Buscamos inspirar un consumo consciente y responsable,
                    demostrando que la reutilización puede ser sinónimo de calidad, diseño y practicidad.</p>
            </article>
        </section>
    </section>

    <section class="block-3">
        <p class="titulo">CONOCE A NUESTROS TRABAJADORES</p>
        <section class="block-3-cards">

            <article class="card">
                <section>
                    <img src="img/nosotros/daniel.png" alt="">
                    <p class="text-1">Daniel Villafranqui</p>
                    <p class="text-2">Producción y Reciclaje
                        Creativo</p>
                </section>
            </article>

            <article class="card">
                <section>
                    <img src="img/nosotros/junior.png" alt="">
                    <p class="text-1">Junior Enrique</p>
                    <p class="text-2">Gestión de Materiales Reciclados</p>
                </section>
            </article>

            <article class="card">
                <section>
                    <img src="img/nosotros/carlos.png" alt="">
                    <p class="text-1">Carlos Ramirez</p>
                    <p class="text-2">Impulsor de la Economía Circular</p>
                </section>
            </article>

            <article class="card">
                <section>
                    <img src="img/nosotros/chatgpt.png " alt="">
                    <p class="text-1">Chat GPT</p>
                    <p class="text-2">El cerebro detrás de la transformación.</p>
                </section>
            </article>
        </section>
    </section>
@endsection
