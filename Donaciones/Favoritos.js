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
    <div class="wishlist-page">  
        <div class="container-fluid">
            <div class="wishlist-page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Marca</th>
                                        <th>Estado</th>
                                        <th>Peso</th>
                                        <th>Tamaño</th>
                                        <th>Cantidad</th>
                                        <th>Agregar al Carrito</th>
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
                                            <td>${producto.marca}</td>
                                            <td>${producto.estado}</td>
                                            <td>${producto.peso}</td>
                                            <td>${producto.tamaño}</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1" class="qty-input">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td><button><i class="fa fa-plus"></i></button></td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    `).join('')}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`;
}
