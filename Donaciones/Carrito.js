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
    <div class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-page-inner">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    ${productos.map(producto => `
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="${producto.foto}" alt="${producto.nombre}"></a>
                                                    <p>${producto.nombre}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1" class="qty-input">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    `).join('')}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-summary">
                                    <div class="cart-content">
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
                                        <h6>Total<span>$100</span></h6>
                                    </div>
                                    <div class="cart-btn">
                                        <button id="btn-finalizar">Pagar</button>
                                    </div>
                                </div>
                            </div>
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
