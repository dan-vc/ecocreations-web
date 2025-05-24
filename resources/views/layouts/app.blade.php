<!DOCTYPE html>
<html lang="es-pe">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Chewy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carrito-flotante.css') }}">
    @yield('styles')
    @livewireStyles
</head>

<body>
    <header>
        <section class="container">
            <a href="{{ url('/') }}">
                <img src="/img/logo.png" alt="Logo del sitio" class="logo">
            </a>
            <nav>
                <a href="{{ url('/') }}" class="nav-link">Inicio</a>
                <a href="{{ url('nosotros') }}" class="nav-link">Nosotros</a>
                <a href="{{ url('productos') }}" class="nav-link">Productos</a>
                <a href="{{ url('contacto') }}" class="nav-link">Contacto</a>
                <form action="{{ url('productos/buscar') }}" method="POST" class="search-form-mobile">
                    @csrf
                    <button type="submit">
                        <img src="/icons/search-normal.svg" alt="" class="search-icon">
                    </button>
                    <input type="text" name="search" placeholder="Buscar productos..">
                </form>
            </nav>
            <form action="{{ url('productos/buscar') }}" method="POST" class="search-form">
                @csrf
                <button type="submit">
                    <img src="/icons/search-normal.svg" alt="" class="search-icon">
                </button>
                <input type="text" name="search" placeholder="Buscar productos..">
            </form>
            <article class="menu-icons">
                <a href="{{ url('carrito') }}" class="nav-link">
                    <img src="/icons/shopping-cart.svg" alt="" class="cart" id="showCart">
                </a>
                <article class="menu-hamburguesa">
                    <img src="/icons/menu.svg" alt="Menú" class="abrir-menu">
                </article>
            </article>
        </section>
        <div id="overlay"></div>
    </header>

    @yield('content')

    <footer>
        <section id="footer-cta">
            <article class="container">
                <form action="#" method="POST" class="subscribe-form">
                    @csrf
                    <section class="input-group">
                        <input type="text" name="search" placeholder="Escribe tu correo..">
                    </section>
                    <button type="submit">
                        Suscribirse
                    </button>
                </form>
                <p>Suscríbete para no perderte ninguna de las ofertas.</p>
            </article>
        </section>
        <section class="content">
            <section class="footer-info">
                <img src="/img/logo.png" alt="" class="logo">
                <ul>
                    <li>Correo: <a href="#">ecocreations@contacto.com</a></li>
                    <li>Teléfono: <a href="#">999999999</a></li>
                    <li>Ubicación: <a href="#">Jr. Alisos 450</a></li>
                </ul>
            </section>
            <section class="footer-links">
                <article>
                    <h3>Redes</h3>
                    <ul>
                        <li>
                            <img src="/icons/ig.svg" alt="">
                            <a href="https://www.instagram.com/eco_creations_s.a.c/">Instagram</a>
                        </li>
                        <li>
                            <img src="/icons/shopping-cart.svg" alt="">
                            <a href="https://www.tiktok.com/@ecocreations_sac">TikTok</a>
                        </li>
                        <li>
                            <img src="/icons/facebook.svg" alt="">
                            <a href="https://www.facebook.com/people/Eco-Creations-SAC/61575799477722/">Facebook</a>
                        </li>
                    </ul>
                </article>
                <article>
                    <h3>Información</h3>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li>
                            <a href="{{ url('nosotros') }}">Nosotros</a>
                        </li>
                        <li>
                            <a href="{{ url('productos') }}">Productos</a>
                        </li>
                        <li>
                            <a href="{{ url('contacto') }}">Contacto</a>
                        </li>
                    </ul>
                </article>
                <article>
                    <h3>Categorías</h3>
                    <ul>
                        <li>
                            <a href="{{ url('productos/categoria/1') }}">Bolsas</a>
                        </li>
                        <li>
                            <a href="{{ url('productos/categoria/2') }}">Botellas</a>
                        </li>
                        <li>
                            <a href="{{ url('productos/categoria/3') }}">Termos</a>
                        </li>
                        <li>
                            <a href="{{ url('productos/categoria/4') }}">Artículos para el hogar</a>
                        </li>
                        <li>
                            <a href="{{ url('productos/categoria/5') }}">Recipientes</a>
                        </li>
                    </ul>
                </article>
            </section>
        </section>
        <section class="container copy">
            <p>© 2023 EcoCreations. Todos los derechos reservados.</p>
        </section>
    </footer>

    @livewireScripts

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mostrarCarrito = document.querySelector('#showCart');
            const overlay = document.getElementById('overlay');
            const carrito = document.querySelector('.carrito');

            mostrarCarrito.addEventListener('click', function() {
                carrito.classList.toggle('active');
                overlay.classList.toggle('active');
            });

            overlay.addEventListener('click', function() {
                carrito.classList.remove('active');
                overlay.classList.remove('active');
            });
        });
    </script>
</body>

</html>
