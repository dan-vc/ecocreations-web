<main class="main-content">
    <div class="container">


        <h1 class="page-title">FINALIZAR COMPRA</h1>

        <div class="checkout-layout">
            <form wire:submit.prevent="handleFormSubmit" class="checkout-form">
                <!-- Información Personal -->
                <div class="form-section">
                    <h2>INFORMACIÓN PERSONAL</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nombre">Nombre *</label>
                            <input type="text" id="nombre" name="nombre" wire:model="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos *</label>
                            <input type="text" id="apellidos" name="apellidos" wire:model="apellidos" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select id="sexo" name="sexo" wire:model="sexo" required>
                                <option value="">Seleccione</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Correo Electrónico *</label>
                            <input type="email" id="email" name="email" wire:model="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono *</label>
                            <input type="tel" id="telefono" name="telefono" wire:model="telefono" required>
                        </div>
                    </div>
                </div>

                <!-- Dirección de Envío -->
                <div class="form-section">
                    <h2>DIRECCIÓN DE ENVÍO</h2>
                    <div class="form-group">
                        <label for="direccion">Dirección *</label>
                        <input type="text" id="direccion" name="direccion" wire:model="direccion" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="ciudad">Ciudad *</label>
                            <input type="text" id="ciudad" name="ciudad" wire:model="ciudad" required>
                        </div>
                        <div class="form-group">
                            <label for="distrito">Distrito *</label>
                            <input type="text" id="distrito" name="distrito" wire:model="distrito" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="codigo_postal">Código Postal</label>
                            <input type="text" id="codigo_postal" name="codigo_postal" wire:model="codigo_postal">
                        </div>
                        <div class="form-group">
                            <label for="referencia">Referencia</label>
                            <input type="text" id="referencia" name="referencia" wire:model="referencia"
                                placeholder="Ej: Casa azul, al lado del parque">
                        </div>
                    </div>
                </div>

                <!-- Método de Pago -->
                <div class="form-section">
                    <h2>MÉTODO DE PAGO</h2>
                    <div class="payment-methods">
                        <div class="payment-option">
                            <input type="radio" id="tarjeta" name="metodo_pago" value="tarjeta" checked>
                            <label for="tarjeta">🏦 Depósito Bancario</label>
                        </div>
                    </div>
                </div>

                <!-- Comentarios -->
                {{-- <div class="form-section">
                    <h2>COMENTARIOS ADICIONALES</h2>
                    <div class="form-group">
                        <label for="comentarios">Notas del pedido (opcional)</label>
                        <textarea id="comentarios" name="comentarios" rows="4" placeholder="Instrucciones especiales para la entrega..."></textarea>
                    </div>
                </div> --}}
            </form>

            <!-- Resumen del Pedido -->
            <div class="order-summary">
                <div class="summary-card">
                    <h3>RESUMEN DEL PEDIDO</h3>

                    <div class="order-items">
                        @if(count($carrito) > 0)
                            @foreach ($carrito as $item)
                                <div class="order-item">
                                    <div class="item-info">
                                        <img src="{{ $item['imagen'] }}" alt="{{ $item['nombre'] }}">
                                        <div>
                                            <h4>{{ $item['nombre'] }}</h4>
                                            <span class="item-quantity">Cantidad: {{ $item['cantidad'] }}</span>
                                        </div>
                                    </div>
                                    <span class="item-total">S/{{ number_format($item['precio'] * $item['cantidad'], 2) }}</span>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="summary-calculations">
                        <div class="summary-line">
                            <span>Subtotal</span>
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
                    </div>

                    <button class="place-order-btn" wire:click="handleFormSubmit">
                        REALIZAR PEDIDO
                    </button>

                    <div class="security-info">
                        <p>🔒 Tu información está protegida con encriptación SSL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
