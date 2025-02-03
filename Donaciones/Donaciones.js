document.addEventListener('DOMContentLoaded', function() {
    traerDatos();
});

let datos; // Asegúrate de que 'datos' esté disponible en todo el archivo.

function traerDatos() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'Donaciones.json', true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                try {
                    datos = JSON.parse(this.responseText);
                    mostrarProductos(datos);
                } catch (error) {
                    console.error('Error al parsear JSON:', error);
                }
            } else {
                console.error('Error en la solicitud:', this.status);
            }
        }
    };
}

function mostrarProductos(productos) {
    let res = document.querySelector('#res');
    res.innerHTML = '';
    productos.forEach(producto => {
        if (producto.nombre && producto.foto) {
            const productoDiv = document.createElement('div');
            productoDiv.className = "col-lg-3 col-md-4 col-sm-6 pb-1";
            productoDiv.innerHTML = `
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="${producto.foto}" alt="${producto.nombre}">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href="#" onclick="mostrarModal(${JSON.stringify(producto).replace(/"/g, '&quot;')})"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="#">${producto.nombre}</a>
                    </div>
                </div>
            `;
            res.appendChild(productoDiv);
        }
    });
}

function mostrarModal(producto) {
    const { nombre, marca, estado, tamaño, peso, material, color, foto, descripcion } = producto;

    // Asignar el contenido del modal
    document.getElementById('modalNombre').innerText = nombre;
    document.getElementById('modalDescripcion').innerHTML = `
        <strong>Marca:</strong> ${marca}<br>
        <strong>Estado:</strong> ${estado}<br>
        <strong>Tamaño:</strong> ${tamaño}<br>
        <strong>Peso:</strong> ${peso}<br>
        <strong>Material:</strong> ${material}<br>
        <strong>Color:</strong> ${color}<br>
        <strong>Descripción:</strong> ${descripcion}
    `;

    // Mostrar el modal y el fondo desenfocado
    document.getElementById('myModal').style.display = 'block';
    document.getElementById('backgroundBlur').classList.add('active');
    document.body.style.overflow = 'hidden';
}

document.querySelector('.close').addEventListener('click', () => {
    cerrarModal();
});

window.addEventListener('click', (event) => {
    const modal = document.getElementById('myModal');
    if (event.target === modal) {
        cerrarModal();
    }
});

function cerrarModal() {
    document.getElementById('myModal').style.display = 'none';
    document.getElementById('backgroundBlur').classList.remove('active');
    document.body.style.overflow = 'auto';
}

// Funciones de búsqueda
document.querySelector('#buscar').addEventListener('click', function () {
    const filtro = document.getElementById('filtro').value;
    const productoEncontrado = buscarProductoPorNombre(filtro);
    if (productoEncontrado) {
        mostrarModal(productoEncontrado);
    } else {
        alert('Producto no encontrado');
    }
});

function buscarProductoPorNombre(nombre) {
    return datos.find(producto => producto.nombre.toLowerCase() === nombre.toLowerCase());
}
