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
            <p class="text_1">Contenedor Hermético Cuadrado 500ml</p>
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
        <p class="text_1">PRODUCTOS RECOMENDADOS</p>
        <div class="card-1">
            <div class="card-1-1">
                <img src="{{ asset('img/detalle_producto/producto ejemplo.png') }}" alt="Foto desde Laravel" width="235"
                    height="232">
                <p>TERMOS</p>
                <p>termo que aguanta el calor por 14 horas en calor</p>
                <p>S/20.70</p>
                <button>COMPRAR</button>
            </div>

            <div>
                <img src="{{ asset('img/detalle_producto/producto ejemplo.png') }}" alt="Foto desde Laravel" width="235"
                    height="232">
                <p>TERMOS</p>
                <p>termo que aguanta el calor por 14 horas en calor</p>
                <p>S/20.70</p>
                <button>COMPRAR</button>
            </div>

            <div>
                <img src="{{ asset('img/detalle_producto/producto ejemplo.png') }}" alt="Foto desde Laravel" width="235"
                    height="232">
                <p>TERMOS</p>
                <p>termo que aguanta el calor por 14 horas en calor</p>
                <p>S/20.70</p>
                <button>COMPRAR</button>
            </div>
        </div>

        <div class="hr">
            <hr>
        </div>
    </div>

    <div class="block-3">
        <div>
            <div>
                <img src="{{ asset('img/detalle_producto/producto ejemplo.png') }}" alt="Foto desde Laravel" width="179"
                    height="173">
                <p>CONFIANZA</p>
                <p>Transparencia en el origen y proceso de nuestros productos reciclados.</p>
            </div>

            <div>
                <img src="{{ asset('img/detalle_producto/producto ejemplo.png') }}" alt="Foto desde Laravel" width="179"
                    height="173">
                <p>CONFIANZA</p>
                <p>Transparencia en el origen y proceso de nuestros productos reciclados.</p>
            </div>

            <div>
                <img src="{{ asset('img/detalle_producto/producto ejemplo.png') }}" alt="Foto desde Laravel" width="179"
                    height="173">
                <p>CONFIANZA</p>
                <p>Transparencia en el origen y proceso de nuestros productos reciclados.</p>
            </div>

            <div>
                <img src="{{ asset('img/detalle_producto/producto ejemplo.png') }}" alt="Foto desde Laravel" width="179"
                    height="173">
                <p>CONFIANZA</p>
                <p>Transparencia en el origen y proceso de nuestros productos reciclados.</p>
            </div>
        </div>
    </div>

</body>

</html>