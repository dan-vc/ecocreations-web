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
    @yield('styles')
</head>

<body>
    <header>
        <section class="container">
            <a href="#">
                <img src="/img/logo.png" alt="Logo del sitio" class="logo">
            </a>
            <nav>
                <a href="#" class="nav-link">Inicio</a>
                <a href="#" class="nav-link">Nosotros</a>
                <a href="#" class="nav-link">Productos</a>
                <a href="#" class="nav-link">Contacto</a>
                <form action="#" method="POST" class="search-form-mobile">
                    @csrf
                    <button type="submit">
                        <img src="icons/search-normal.svg" alt="" class="search-icon">
                    </button>
                    <input type="text" name="search" placeholder="Buscar productos..">
                </form>
            </nav>
            <form action="#" method="POST" class="search-form">
                @csrf
                <button type="submit">
                    <img src="icons/search-normal.svg" alt="" class="search-icon">
                </button>
                <input type="text" name="search" placeholder="Buscar productos..">
            </form>
            <article class="menu-icons">
                <a href="#">
                    <img src="icons/shopping-cart.svg" alt="" class="cart">
                </a>
                <article class="menu-hamburguesa">
                    <img src="icons/menu.svg" alt="Menú" class="abrir-menu">
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
                        <img src="icons/envelope.svg" alt="">
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
                <img src="img/logo.png" alt="" class="logo">
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
                            <img src="icons/ig.svg" alt="">
                            <a href="#">Instagram</a>
                        </li>
                        <li>
                            <img src="icons/shopping-cart.svg" alt="">
                            <a href="#">TikTok</a>
                        </li>
                        <li>
                            <img src="icons/facebook.svg" alt="">
                            <a href="#">Facebook</a>
                        </li>
                    </ul>
                </article>
                <article>
                    <h3>Información</h3>
                    <ul>
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Nosotros</a>
                        </li>
                        <li>
                            <a href="#">Productos</a>
                        </li>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                    </ul>
                </article>
                <article>
                    <h3>Categorías</h3>
                    <ul>
                        <li>
                            <a href="#">Bolsas</a>
                        </li>
                        <li>
                            <a href="#">Botellas</a>
                        </li>
                        <li>
                            <a href="#">Termos</a>
                        </li>
                        <li>
                            <a href="#">Esponjas</a>
                        </li>
                        <li>
                            <a href="#">Recipientes</a>
                        </li>
                    </ul>
                </article>
            </section>
        </section>
        <section class="container copy">
            <p>© 2023 EcoCreations. Todos los derechos reservados.</p>
        </section>
    </footer>
</body>

</html>
