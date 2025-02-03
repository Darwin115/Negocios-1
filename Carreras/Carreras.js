console.log('correcto');
let datos;

document.querySelector('#buscar').addEventListener('click', function () {
    const filtro = document.getElementById('filtro').value;
    buscarProductos(filtro);
});

document.querySelector('#categoria').addEventListener('change', function () {
    const categoriaSeleccionada = this.value;
    aplicarFiltros();
});

document.querySelector('#duracion').addEventListener('change', function () {
    const duracionSeleccionada = this.value;
    aplicarFiltros();
});

document.querySelector('#costo').addEventListener('change', function () {
    const costoSeleccionado = this.value;
    aplicarFiltros();
});

document.querySelector('#orden').addEventListener('change', function () {
    const ordenSeleccionado = this.value;
    aplicarFiltros();
});

traerDatos();

function traerDatos() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'Carreras.json', true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
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

    for (let producto of productos) {
        if (producto.nombre) {
            const card = document.createElement('div');
            card.className = 'col-md-4 text-center producto';
            card.innerHTML = `
                <div class="card">
                    <div class="card-content">
                        <h3 class="nombre">${producto.nombre}</h3>
                    </div>
                </div>
            `;
            card.addEventListener('click', () => mostrarModal(producto));
            res.appendChild(card);
        }
    }
}

function mostrarModal(producto) {
    const { nombre, descripcion, imagen, mision, vision, objetivos } = producto;

    // Asignar el contenido del modal
    document.getElementById('modalNombre').innerText = nombre;
    document.getElementById('modalDescripcion').innerText = descripcion;
    document.getElementById('modalImagen').src = imagen;
    
    // Aquí debes asignar texto, no src
    document.getElementById('modalMision').innerText = mision;
    document.getElementById('modalVision').innerText = vision;

    // Mostrar los objetivos en una lista
    const objetivosList = document.getElementById('modalObjetivos');
    objetivosList.innerHTML = ''; // Limpiar la lista de objetivos anterior
    objetivos.forEach(objetivo => {
        const li = document.createElement('li');
        li.innerText = objetivo;
        objetivosList.appendChild(li);
    });

    // Mostrar el modal y el fondo desenfocado
    document.getElementById('myModal').style.display = 'block';
    document.getElementById('backgroundBlur').classList.add('active');

    // Desactivar scroll en el body
    document.body.style.overflow = 'hidden';
}


window.addEventListener('click', (event) => {
    const modal = document.getElementById('myModal');
    if (event.target === modal) {
        modal.style.display = 'none';
        document.getElementById('backgroundBlur').classList.remove('active');

        // Reactivar scroll en el body
        document.body.style.overflow = 'auto';
    }
});

function buscarProductos(filtro) {
    const productosFiltrados = datos.filter(producto =>
        producto.nombre.toLowerCase().includes(filtro.toLowerCase()) ||
        producto.acronimo.toLowerCase().includes(filtro.toLowerCase())
    );
    mostrarProductos(productosFiltrados);
}

function aplicarFiltros() {
    const categoria = document.getElementById('categoria').value;
    const duracion = document.getElementById('duracion').value;
    const costo = document.getElementById('costo').value;
    const orden = document.getElementById('orden').value;

    let productosFiltrados = datos;

    // Filtro por categoría
    if (categoria !== 'ninguno') {
        productosFiltrados = productosFiltrados.filter(producto => producto.categoria === categoria);
    }

    // Filtro por duración
    if (duracion !== 'ninguno') {
        productosFiltrados = productosFiltrados.filter(producto => producto.duracion === duracion);
    }

    // Filtro por costo
    if (costo !== 'ninguno') {
        productosFiltrados = productosFiltrados.filter(producto => producto.costo === costo);
    }

    // Ordenar los productos
    if (orden !== 'ninguno') {
        switch (orden) {
            case 'ranking':
                productosFiltrados.sort((a, b) => a.ranking - b.ranking); 
                break;
            case 'ubicacion':
                productosFiltrados.sort((a, b) => a.ubicacion.localeCompare(b.ubicacion)); 
                break;
            case 'costo':
                productosFiltrados.sort((a, b) => a.costo - b.costo); 
                break;
            case 'duracion':
                productosFiltrados.sort((a, b) => a.duracion - b.duracion); 
                break;
        }
    }
    mostrarProductos(productosFiltrados);
}
