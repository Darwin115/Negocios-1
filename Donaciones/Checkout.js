document.addEventListener('DOMContentLoaded', function() {
    cargarCarrito();
});

function cargarCarrito() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'Donaciones.json', true);

    xhttp.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                try {
                    const datos = JSON.parse(this.responseText);
                    mostrarCarrito(datos);
                } catch (error) {
                    console.error('Error al parsear JSON:', error);
                }
            } else {
                console.error('Error en la solicitud:', this.status);
            }
        }
    };

    xhttp.send();
}

function mostrarCarrito(productos) {
    const res = document.querySelector('#res');
    res.innerHTML = `
    <div class="checkout">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-inner">
                        <div class="billing-address">
                            <h6>Dirección de Facturación</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre</label>
                                    <input class="form-control" type="text" placeholder="Nombre">
                                </div>
                                <div class="col-md-6">
                                    <label>Apellido</label>
                                    <input class="form-control" type="text" placeholder="Apellido">
                                </div>
                                <div class="col-md-6">
                                    <label>Correo Electrónico</label>
                                    <input class="form-control" type="text" placeholder="Correo Electrónico">
                                </div>
                                <div class="col-md-6">
                                    <label>Teléfono Móvil</label>
                                    <input class="form-control" type="text" placeholder="Teléfono Móvil">
                                </div>
                                <div class="col-md-12">
                                    <label>Dirección</label>
                                    <input class="form-control" type="text" placeholder="Dirección">
                                </div>
                                <div class="col-md-6">
                                    <label>País</label>
                                    <select class="custom-select">
                                        <option selected>México</option>
                                        <option>Estados Unidos</option>
                                        <option>Afganistán</option>
                                        <option>Albania</option>
                                        <option>Argelia</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>Ciudad</label>
                                    <input class="form-control" type="text" placeholder="Ciudad">
                                </div>
                                <div class="col-md-6">
                                    <label>Estado</label>
                                    <input class="form-control" type="text" placeholder="Estado">
                                </div>
                                <div class="col-md-6">
                                    <label>Código Postal</label>
                                    <input class="form-control" type="text" placeholder="Código Postal">
                                </div>
                            </div>
                        </div>

                        <div class="shipping-address">
                            <h2>Shipping Address</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name"</label>
                                    <input class="form-control" type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" placeholder="Mobile No">
                                </div>
                                <div class="col-md-12">
                                    <label>Address</label>
                                    <input class="form-control" type="text" placeholder="Address">
                                </div>
                                <div class="col-md-6">
                                    <label>Country</label>
                                    <select class="custom-select">
                                        <option selected>United States</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>City</label>
                                    <input class="form-control" type="text" placeholder="City">
                                </div>
                                <div class="col-md-6">
                                    <label>State</label>
                                    <input class="form-control" type="text" placeholder="State">
                                </div>
                                <div class="col-md-6">
                                    <label>ZIP Code</label>
                                    <input class="form-control" type="text" placeholder="ZIP Code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="checkout-inner">
                        <div class="checkout-summary">
                            <h1>Resumen del Carrito</h1>
                            <p>Mouse Óptico Inalámbrico<span>$0</span></p>
                            <p>Teclado Mecánico<span>$0</span></p>
                            <p>Audífonos In-Ear Bluetooth<span>$0</span></p>
                            <p>Calculadora Científica FX-991EX<span>$0</span></p>
                            <p>Manual de Medicina Interna<span>$0</span></p>
                            <p>Bata Blanca de Laboratorio<span>$0</span></p>
                            <p>Cinta Métrica Retráctil 5m<span>$0</span></p>
                            <p>Estetoscopio Clínico Classic III<span>$0</span></p>
                            <p>Reloj Analógico Deportivo<span>$0</span></p>
                            <p>Proyector Full HD<span>$0</span></p>
                            <p>Subtotal<span>$0</span></p>
                            <p>Costo de Envío<span>$99</span></p>
                            <h6>Total<span>$100</span></h6
                        </div>
                    </div>

                    <div class="checkout-payment">
                        <div class="payment-methods">
                            <h1>Métodos de Pago</h1>
                            <div class="payment-method">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                    <label class="custom-control-label" for="payment-1">Tarjeta de débito</label>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                    <label class="custom-control-label" for="payment-2">Tarjeta de crédito</label>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                    <label class="custom-control-label" for="payment-3">Transferencia SPEI</label>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                    <label class="custom-control-label" for="payment-4">OXXO</label>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-btn">
                            <button>Realizar Pedido</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    document.getElementById('btn-finalizar').addEventListener('click', function() {
        window.location.href = 'Checkout.php'; 
    });
}

function calcularSubtotal(productos) {
    return productos.length * 1; 
}
