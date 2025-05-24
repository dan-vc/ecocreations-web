@extends('layouts.app')
@section('title', 'Contáctanos')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
@endsection
@section('content')
    <div class="contact-container">
        <h1 class="contact-title">Contáctanos</h1>

        <div class="form-section">
            <h2 class="form-title">Escríbenos</h2>
            <p class="form-description">Estamos aquí para responder tus preguntas y escuchar tus ideas para un futuro más
                verde.</p>

            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono">
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="6" required></textarea>
                </div>

                <button type="submit" class="submit-button">ENVIAR MENSAJE</button>
            </form>
        </div>

        <div class="info-section">
            <h2 class="info-section-title">Información de contacto</h2>

            <div class="info-cards">
                <div class="info-card">
                    <h3 class="info-card-title">Dirección</h3>
                    <p class="info-card-text">Jr: Alisos 450</p>
                </div>

                <div class="info-card">
                    <h3 class="info-card-title">Número</h3>
                    <p class="info-card-text">999999999</p>
                </div>

                <div class="info-card">
                    <h3 class="info-card-title">Correo</h3>
                    <p class="info-card-text">
                        <a href="mailto:ecocreations@contacto.com">ecocreations@contacto.com</a>
                    </p>
                </div>

                <div class="info-card">
                    <h3 class="info-card-title">Horario de atención</h3>
                    <p class="info-card-text">Lunes a Domingo: 12:00 pm - 10:00 pm</p>
                </div>
            </div>
        </div>
    </div>


    <script type="module" src="/js/contacto.js"></script>
@endsection
