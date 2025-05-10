<!DOCTYPE html>
<html lang="es-pe">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <header>

        <a href="#">
            <img src="" alt="Logo del sitio">
        </a>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Productos</a>
            <a href="#">Contacto</a>
        </nav>
        <form action="#" method="POST">
            @csrf
            <input type="text" name="search" placeholder="Buscar...">
            <button type="submit">Buscar</button>
        </form>
        <a href="#">
            <i>Carrito</i>
        </a>
    </header>

    @yield('content')

    <footer>
        <h2>Este es el pie de página</h2>
    </footer>
</body>

</html>
