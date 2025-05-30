<main>
    <section class="block-1">
        <section class="card-1">
            <img src="{{ $producto->imgproducto }}" alt="Foto desde Laravel" width="554" height="498">
        </section>

        <section class="card-2">
            <p class="text_1">{{ $producto->nomproducto }}</p>
            <p class="text_2">S/{{ number_format($producto->preproducto, 2) }}</p>
            <p class="text_3">Cantidad:</p>
            <section class="card-1-1">
                <button wire:click="aumentarCantidad">+</button>
                <p>{{ $cantidad }}</p>
                <button wire:click="disminuirCantidad">-</button>
            </section>
            <section class="card-1-2">
                <p class="text_1">Descripción</p>
                <p class="text_2">{{ $producto->desproducto }}</p>
                <button wire:click="agregarAlCarrito" class="btn">
                    Agregar al Carrito
                </button>
            </section>
        </section>
    </section>

    <section class="block-2">
        <section class="texto">
            <p class="text_1">PRODUCTOS RECOMENDADOS</p>
        </section>

        <ul class="container">
            @foreach ($productosRelacionados as $producto)
                <li class="product-card">
                    <a href="{{ url('productos/' . $producto->idproducto) }}">
                        <img src="{{ $producto->imgproducto }}" alt="Vaso">
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

    <script type="module" src="/js/producto_detalle.js"></script>
</main>
