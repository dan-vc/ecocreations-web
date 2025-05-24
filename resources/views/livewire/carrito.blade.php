<main class="main-content">
    <div class="container">

        <h1 class="page-title">MI CARRITO</h1>

        <div class="cart-layout">
            <div class="cart-items">

                @foreach ($carrito as $item)
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="{{ $item->imagen }}" alt="Termo">
                        </div>
                        <div class="item-details">
                            <h3>TERMOS</h3>
                            <p>Termo que aguanta el calor por 14 horas en calor</p>
                            <div class="item-controls">
                                <div class="quantity-controls">
                                    <button class="qty-btn" data-action="decrease">-</button>
                                    <span class="quantity">2</span>
                                    <button class="qty-btn" data-action="increase">+</button>
                                </div>
                                <span class="item-price">S/20.70</span>
                                <button class="remove-btn" data-item-id="1">🗑️</button>
                            </div>
                        </div>
                    </div>
                @endforeach

{{-- 
                <!-- Item 2 -->
                <div class="cart-item">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/100x100/ffb6c1/ffffff?text=Contenedor" alt="Contenedor">
                    </div>
                    <div class="item-details">
                        <h3>CONTENEDOR HERMÉTICO CUADRADO 500ML</h3>
                        <p>Contenedor hermético cuadrado de 500ml para almacenar alimentos</p>
                        <div class="item-controls">
                            <div class="quantity-controls">
                                <button class="qty-btn" data-action="decrease">-</button>
                                <span class="quantity">1</span>
                                <button class="qty-btn" data-action="increase">+</button>
                            </div>
                            <span class="item-price">S/13.00</span>
                            <button class="remove-btn" data-item-id="2">🗑️</button>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="cart-item">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/100x100/ffb6c1/ffffff?text=Termo" alt="Termo">
                    </div>
                    <div class="item-details">
                        <h3>TERMOS</h3>
                        <p>Termo que aguanta el calor por 14 horas en calor</p>
                        <div class="item-controls">
                            <div class="quantity-controls">
                                <button class="qty-btn" data-action="decrease">-</button>
                                <span class="quantity">1</span>
                                <button class="qty-btn" data-action="increase">+</button>
                            </div>
                            <span class="item-price">S/20.70</span>
                            <button class="remove-btn" data-item-id="3">🗑️</button>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="cart-item">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/100x100/98d8c8/ffffff?text=Botella" alt="Botella">
                    </div>
                    <div class="item-details">
                        <h3>BOTELLA ECOLÓGICA 750ML</h3>
                        <p>Botella reutilizable fabricada con materiales 100% reciclables</p>
                        <div class="item-controls">
                            <div class="quantity-controls">
                                <button class="qty-btn" data-action="decrease">-</button>
                                <span class="quantity">1</span>
                                <button class="qty-btn" data-action="increase">+</button>
                            </div>
                            <span class="item-price">S/15.50</span>
                            <button class="remove-btn" data-item-id="4">🗑️</button>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="cart-item">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/100x100/c8e6c9/ffffff?text=Bolsa" alt="Bolsa">
                    </div>
                    <div class="item-details">
                        <h3>BOLSA REUTILIZABLE SET X3</h3>
                        <p>Set de 3 bolsas de diferentes tamaños, ideales para compras sustentables</p>
                        <div class="item-controls">
                            <div class="quantity-controls">
                                <button class="qty-btn" data-action="decrease">-</button>
                                <span class="quantity">2</span>
                                <button class="qty-btn" data-action="increase">+</button>
                            </div>
                            <span class="item-price">S/25.00</span>
                            <button class="remove-btn" data-item-id="5">🗑️</button>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="cart-summary">
                <div class="summary-card">
                    <h3>RESUMEN DEL PEDIDO</h3>

                    <div class="summary-line">
                        <span>Subtotal (7 productos)</span>
                        <span>S/121.40</span>
                    </div>

                    <div class="summary-line">
                        <span>Envío</span>
                        <span>S/10.00</span>
                    </div>

                    <div class="summary-line discount">
                        <span>Descuento</span>
                        <span>-S/8.00</span>
                    </div>

                    <hr>

                    <div class="summary-total">
                        <span>TOTAL</span>
                        <span>S/123.40</span>
                    </div>

                    <div class="promo-code">
                        <input type="text" placeholder="Código de descuento" class="promo-input">
                        <button class="promo-btn">APLICAR</button>
                    </div>

                    <button class="checkout-btn" data-action="checkout">
                        PROCEDER AL PAGO
                    </button>

                    <button class="continue-shopping" data-action="continue-shopping">
                        CONTINUAR COMPRANDO
                    </button>
                </div>
            </div>
        </div>




        <!-- Sección de productos relacionados (movida al final) -->
        <div class="related-products">
            <h2>PRODUCTOS QUE PODRÍAN INTERESARTE</h2>
            <div class="products-grid">
                <div class="product-card">
                    <img src="https://via.placeholder.com/200x200/a8d8a8/ffffff?text=Vaso" alt="Vaso">
                    <h3>VASO DE BAMBÚ</h3>
                    <p>Vaso ecológico fabricado con fibra de bambú natural</p>
                    <div class="product-price">S/12.90</div>
                    <button class="add-to-cart-btn" data-product-id="101">AGREGAR AL CARRITO</button>
                </div>

                <div class="product-card">
                    <img src="https://via.placeholder.com/200x200/b8e6d1/ffffff?text=Cubierto" alt="Cubiertos">
                    <h3>SET CUBIERTOS BAMBÚ</h3>
                    <p>Juego de cubiertos portátiles de bambú con estuche</p>
                    <div class="product-price">S/18.50</div>
                    <button class="add-to-cart-btn" data-product-id="102">AGREGAR AL CARRITO</button>
                </div>

                <div class="product-card">
                    <img src="https://via.placeholder.com/200x200/d4c5f9/ffffff?text=Plato" alt="Plato">
                    <h3>PLATO BIODEGRADABLE</h3>
                    <p>Plato compostable hecho de materiales 100% naturales</p>
                    <div class="product-price">S/8.90</div>
                    <button class="add-to-cart-btn" data-product-id="103">AGREGAR AL CARRITO</button>
                </div>

                <div class="product-card">
                    <img src="https://via.placeholder.com/200x200/f9d5c5/ffffff?text=Servilleta" alt="Servilletas">
                    <h3>SERVILLETAS RECICLADAS</h3>
                    <p>Pack de servilletas elaboradas con papel reciclado</p>
                    <div class="product-price">S/6.50</div>
                    <button class="add-to-cart-btn" data-product-id="104">AGREGAR AL CARRITO</button>
                </div>
            </div>
        </div>

    </div>
</main>
