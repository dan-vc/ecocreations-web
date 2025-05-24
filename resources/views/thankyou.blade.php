@extends('layouts.app')
@section('title', 'Gracias por tu compra')
@section('styles')
    <link rel="stylesheet" href="/css/gracias.css">
@endsection
@section('content')
    <main class="main-content">
        <div class="container">

            <!-- Mensaje de agradecimiento principal -->
            <div class="thank-you-header">
                <div class="success-icon">✅</div>
                <h1 class="page-title">¡GRACIAS POR TU COMPRA!</h1>
                <p class="subtitle">Tu pedido ha sido procesado exitosamente</p>
                <div class="order-number">
                    <span>Número de pedido: <strong>{{ $idpedido }}</strong></span>
                </div>
            </div>

            <div class="order-layout">

                <!-- Información del cliente -->
                <div class="customer-info">
                    <div class="info-card">
                        <h3>INFORMACIÓN DEL CLIENTE</h3>

                        <div class="info-section">
                            <h4>Datos Personales</h4>
                            <div class="info-row">
                                <span class="label">Nombre:</span>
                                <span class="value">{{ $cliente->nomcliente }}</span>
                            </div>
                            <div class="info-row">
                                <span class="label">Email:</span>
                                <span class="value">{{ $cliente->corrcliente }}</span>
                            </div>
                            <div class="info-row">
                                <span class="label">Teléfono:</span>
                                <span class="value">{{ $cliente->numcliente }}</span>
                            </div>
                        </div>

                        <div class="info-section">
                            <h4>Dirección de Entrega</h4>
                            <div class="info-row address">
                                <span class="value">
                                    {{ $cliente->dircliente }}
                                </span>
                            </div>
                        </div>

                        <div class="info-section">
                            <h4>Información de Entrega</h4>
                            <div class="info-row">
                                <span class="label">Fecha estimada:</span>
                                <span
                                    class="value">{{ \Carbon\Carbon::now()->addDays(5)->format('d - d \d\e F, Y') }}</span>
                            </div>
                            <div class="info-row">
                                <span class="label">Método de envío:</span>
                                <span class="value">Envío Estándar</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Resumen del pedido -->
                <div class="order-summary">
                    <div class="summary-card">
                        <h3>RESUMEN DEL PEDIDO</h3>

                        <div class="order-items">
                            @foreach ($productos as $producto)
                                <div class="order-item">
                                    <div class="item-image">
                                        <img src="{{ $producto['info']->imgproducto }}" alt="{{ $producto['info']->nomproducto }}">
                                    </div>
                                    <div class="item-info">
                                        <h4>{{ $producto['info']->nomproducto }}</h4>
                                        <p>{{ $producto['info']->desproducto }}</p>
                                        <div class="item-details">
                                            <span class="quantity">Cantidad: {{ $producto['cantidad'] }}</span>
                                            <span class="price">S/{{ number_format($producto['info']->preproducto, 2) }} c/u</span>
                                        </div>
                                    </div>
                                    <div class="item-total">S/{{ number_format($producto['info']->preproducto * $producto['cantidad'], 2) }}</div>
                                </div>
                            @endforeach
                        </div>

                        <div class="order-totals">
                            <div class="total-line">
                                <span>Subtotal (6 productos)</span>
                                <span>S/{{ number_format($pedido->pedtotal, 2) }}</span>
                            </div>

                            <div class="total-line">
                                <span>Envío</span>
                                <span>S/10.00</span>
                            </div>

                            <div class="total-line discount">
                                <span>Descuento aplicado</span>
                                <span>-S/0.00</span>
                            </div>

                            <hr>

                            <div class="total-final">
                                <span>TOTAL PAGADO</span>
                                <span>S/{{ number_format($pedido->pedtotal + 10, 2) }}</span>
                            </div>
                        </div>

                        <div class="payment-method">
                            <h4>Información para Depósito</h4>
                            <div class="bank-info">
                                <div class="bank-detail">
                                    <span class="bank-label">Banco:</span>
                                    <span class="bank-value">Banco de Crédito del Perú (BCP)</span>
                                </div>
                                <div class="bank-detail">
                                    <span class="bank-label">Número de cuenta:</span>
                                    <span class="bank-value">194-2345678-0-95</span>
                                </div>
                                <div class="bank-detail">
                                    <span class="bank-label">CCI:</span>
                                    <span class="bank-value">002-194-002345678095-28</span>
                                </div>
                                <div class="bank-detail">
                                    <span class="bank-label">Titular:</span>
                                    <span class="bank-value">Eco Creations S.A.C.</span>
                                </div>
                                <div class="bank-detail">
                                    <span class="bank-label">RUC:</span>
                                    <span class="bank-value">20123456789</span>
                                </div>
                            </div>
                            <div class="payment-note">
                                <p><strong>Importante:</strong> Una vez realizado el depósito, envía el comprobante por
                                    WhatsApp al +51 999 888 777 indicando tu número de pedido para confirmar el pago.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Información adicional -->
            <div class="additional-info">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-icon">📧</div>
                        <h4>CONFIRMACIÓN POR EMAIL</h4>
                        <p>Hemos enviado los detalles de tu pedido a tu correo electrónico. Si no lo encuentras, revisa tu
                            carpeta de spam.</p>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">📦</div>
                        <h4>SEGUIMIENTO DEL PEDIDO</h4>
                        <p>Recibirás un código de seguimiento una vez que tu pedido sea despachado. Podrás rastrear tu envío
                            en tiempo real.</p>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">🌱</div>
                        <h4>IMPACTO ECOLÓGICO</h4>
                        <p>Con tu compra has contribuido a reducir 2.5kg de residuos plásticos. ¡Gracias por cuidar nuestro
                            planeta!</p>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">💬</div>
                        <h4>ATENCIÓN AL CLIENTE</h4>
                        <p>¿Tienes alguna pregunta? Contáctanos al WhatsApp +51 999 888 777 o email: soporte@ecocreations.pe
                        </p>
                    </div>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="action-buttons">
                <a class="btn btn-secondary" onclick="window.print()">
                    IMPRIMIR PEDIDO
                </a>
                <a class="btn btn-secondary" href="{{ url('/') }}">
                    VOLVER AL INICIO
                </a>
                <a class="btn btn-secondary" href="{{ url('productos') }}">
                    SEGUIR COMPRANDO
                </a>
            </div>

        </div>
    </main>
@endsection
