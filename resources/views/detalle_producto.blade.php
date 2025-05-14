<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="{{ asset('css/detalle_producto.css') }}">

</head>

<body>
    <div class="block-1">
        <div class="card-1">
            <img src="{{ asset('img/detalle_producto/producto ejemplo.png') }}" alt="Foto desde Laravel" width="554"
                height="498">
        </div>

        <div class="card-2">
            <p class="text_1">CONTENEDOR HERMÉTICO CUADRADO 500ML</p>
            <p class="text_2">S/13.00</p>
            <p class="text_3">Cantidad:</p>
            <div class="card-1-1">
                <button>+</button>
                <p>1</p>
                <button>-</button>
            </div>
            <div class="card-1-2">
                <p class="text_1">Descripción</p>
                <p class="text_2">Contenedor hermético cuadrado de 500ml para almacenar alimentos de forma segura y
                    mantener su frescura.
                </p class="text_3">
                <button>Agregar al Carrito</button>
            </div>
        </div>

    </div>
    <div class="hr">
        <hr>
    </div>
    <div class="block-2">
        <div class="texto">
            <p class="text_1">PRODUCTOS RECOMENDADOS</p>
        </div>
        <div class="card-1">
            <div class="card-1-1">
                <div>
                    <img src="{{ asset('img/detalle_producto/termos.png') }}" alt="Foto desde Laravel" width="235"
                        height="232">
                    <p class="text_1">TERMOS</p>
                    <p class="text_2">termo que aguanta el calor por 14 horas en calor</p>
                    <p class="text_3">S/20.70</p>
                    <button>COMPRAR</button>
                </div>
            </div>

            <div class="card-1-1">
                <div>
                    <img src="{{ asset('img/detalle_producto/termos.png') }}" alt="Foto desde Laravel" width="235"
                        height="232">
                    <p class="text_1">TERMOS</p>
                    <p class="text_2">termo que aguanta el calor por 14 horas en calor</p>
                    <p class="text_3">S/20.70</p>
                    <button>COMPRAR</button>
                </div>
            </div>

            <div class="card-1-1">
                <div>
                    <img src="{{ asset('img/detalle_producto/termos.png') }}" alt="Foto desde Laravel" width="235"
                        height="232">
                    <p class="text_1">TERMOS</p>
                    <p class="text_2">termo que aguanta el calor por 14 horas en calor</p>
                    <p class="text_3">S/20.70</p>
                    <button>COMPRAR</button>
                </div>
            </div>

        </div>

        <div class="hr">
            <hr>
        </div>
    </div>

    <div class="block-3">

        <div class="card-1">
            <img src="{{ asset('img/detalle_producto/confianza.png') }}" alt="Foto desde Laravel" width="179"
                height="173">
            <p class="text_1">CONFIANZA</p>
            <p class="text_2">Transparencia en el origen y proceso de nuestros productos reciclados.</p>
        </div>

        <div class="card-1">
            <img src="{{ asset('img/detalle_producto/pago en linea.png') }}" alt="Foto desde Laravel" width="179"
                height="173">
            <p class="text_1">PAGO EN LÍNEA</p>
            <p class="text_2">Comodidad y seguridad en tus transacciones.</p>
        </div>

        <div class="card-1">
            <img src="{{ asset('img/detalle_producto/puntualidad.png') }}" alt="Foto desde Laravel" width="179"
                height="173">
            <p class="text_1">PUNTUALIDAD</p>
            <p class="text_2">Apoya la economía circular y el cuidado del planeta.</p>
        </div>

        <div class="card-1">
            <img src="{{ asset('img/detalle_producto/tienda.png') }}" alt="Foto desde Laravel" width="179"
                height="173">
            <p class="text_1">RECOJO EN TIENDA</p>
            <p class="text_2"> Dale un toque original y consciente a tu día a día.</p>
        </div>


    </div>

</body>

</html>