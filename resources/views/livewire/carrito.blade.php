<main class="main-content">
    <div class="container">

        <h1 class="page-title">MI CARRITO</h1>

        <div class="cart-layout">
            <div class="cart-items">
                @if (count($carrito) == 0)
                    <div class="empty-cart">
                        <h2>Tu carrito está vacío</h2>
                        <p>Agrega productos a tu carrito para comenzar a comprar.</p>
                        <a href="{{ url('productos') }}" class="continue-shopping">CONTINUAR COMPRANDO</a>
                    </div>
                @endif

                @foreach ($carrito as $item)
                    <div class="cart-item">
                        <a href="{{ url('productos/' . $item['id']) }}" class="item-image">
                            <img src="{{ $item['imagen'] }}" alt="Termo">
                        </a>
                        <div class="item-details">
                            <a href="{{ url('productos/' . $item['id']) }}">
                                <h3>{{ $item['nombre'] }}</h3>
                            </a>
                            <p>{{ $item['descripcion'] }}</p>
                            <div class="item-controls">
                                <div class="quantity-controls">
                                    <button class="qty-btn" data-action="decrease"
                                        wire:click="actualizarCantidad({{ $item['id'] }}, {{ $item['cantidad'] - 1 }})">-</button>
                                    <span class="quantity">{{ $item['cantidad'] }}</span>
                                    <button class="qty-btn" data-action="increase"
                                        wire:click="actualizarCantidad({{ $item['id'] }}, {{ $item['cantidad'] + 1 }})">+</button>
                                </div>
                                <span class="item-price">S/{{ number_format($item['precio'], 2) }}</span>
                                <button class="remove-btn" wire:click="eliminar({{ $item['id'] }})">🗑️</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="cart-summary">
                <div class="summary-card">
                    <h3>RESUMEN DEL PEDIDO</h3>

                    <div class="summary-line">
                        <span>Subtotal ({{ count($carrito) }} producto{{ count($carrito) !== 1 ? 's' : '' }})</span>
                        <span>S/{{ number_format($total, 2) }}</span>
                    </div>

                    <div class="summary-line">
                        <span>Envío</span>
                        <span>S/10.00</span>
                    </div>

                    <div class="summary-line discount">
                        <span>Descuento</span>
                        <span>-S/0.00</span>
                    </div>

                    <hr>

                    <div class="summary-total">
                        <span>TOTAL</span>
                        <span>S/{{ number_format($total + 10, 2) }}</span>
                    </div>

                    <div class="promo-code">
                        <input type="text" placeholder="Código de descuento" class="promo-input">
                        <button class="promo-btn">APLICAR</button>
                    </div>

                    <a href="{{ url('checkout') }}" class="checkout-btn">
                        PROCEDER AL PAGO
                    </a>

                    <a href="{{ url('productos') }}" class="continue-shopping">
                        CONTINUAR COMPRANDO
                    </a>
                </div>
            </div>
        </div>




        <!-- Sección de productos relacionados (movida al final) -->
        <div class="related-products">
            <h2>PRODUCTOS QUE PODRÍAN INTERESARTE</h2>
            <div class="products-grid">

                @foreach ($productosRecomendados as $producto)
                    <div class="product-card">
                        <a href="{{ url('productos/' . $producto->idproducto) }}"><img
                                src="{{ $producto->imgproducto }}" alt="Vaso"></a>
                        <a href="{{ url('productos/' . $producto->idproducto) }}">
                            <h3>{{ $producto->nomproducto }}</h3>
                        </a>
                        <p>{{ $producto->desproducto }}</p>
                        <div class="product-price">S/{{ number_format($producto->preproducto, 2) }}</div>
                        <button class="add-to-cart-btn" wire:click="agregar({{ $producto->idproducto }})">AGREGAR AL
                            CARRITO</button>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    {{-- <script type="module" src="/js/carrito.js"></script> --}}

</main>
