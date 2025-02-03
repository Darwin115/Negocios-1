console.log('correcto');
let datos;

document.querySelector('#buscar').addEventListener('click', function () {
    const filtro = document.getElementById('filtro').value;
    buscarProductos(filtro);
});

document.getElementById('categoria').addEventListener('change', function () {
    aplicarFiltros(); // Aplica filtros al cambiar la categoría
});

document.getElementById('nivel').addEventListener('change', function () {
    aplicarFiltros(); // Aplica filtros al cambiar el nivel
});

document.getElementById('modalidad').addEventListener('change', function () {
    aplicarFiltros(); // Aplica filtros al cambiar la modalidad
});

document.getElementById('orden').addEventListener('change', function () {
    aplicarFiltros(); // Aplica filtros al cambiar el orden
});

traerDatos();

function traerDatos() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'Unis.json', true);

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
        if (producto.nombre && producto.acronimo && producto.direccion && producto.telefono && producto.url && producto.foto) {
            res.innerHTML += `
            <div class="col-md-4 text-center producto">
            <div class="card" style="margin: 10px;">
                <div class="card-content">
                    <h2 class="text-center text-dark">${producto.acronimo}</h2>
                    <h3 class="text-center text-primary text-dark nombre">${producto.nombre}</h3>
                    <a href="${producto.url}">
                        <img class="text-center" src="${producto.foto}" alt="">
                    </a>
                    <h5 class="direccion">${producto.direccion}</h5>
                    <h4 class="text-center text-dark">${producto.telefono}</h4>
                </div>
            </div>
        </div>`;
        }
    }
}

function buscarProductos(filtro) {
    const productosFiltrados = datos.filter(producto =>
        producto.nombre.toLowerCase().includes(filtro.toLowerCase()) ||
        producto.acronimo.toLowerCase().includes(filtro.toLowerCase())
    );
    mostrarProductos(productosFiltrados);
}

function aplicarFiltros() {
    const categoria = document.getElementById('categoria').value;
    const nivel = document.getElementById('nivel').value;
    const modalidad = document.getElementById('modalidad').value;
    const orden = document.getElementById('orden').value;

    let universidadesFiltradas = datos;

    // Filtrar por categoría
    if (categoria !== 'ninguno') {
        universidadesFiltradas = universidadesFiltradas.filter(universidad =>
            universidad[categoria] === "si"
        );
    }

    // Filtrar por tipo de universidad (pública, privada, etc.)
    if (nivel !== 'ninguno') {
        universidadesFiltradas = universidadesFiltradas.filter(universidad =>
            universidad.nivel === nivel
        );
    }

    // Filtrar por modalidad
    if (modalidad !== 'ninguno') {
        universidadesFiltradas = universidadesFiltradas.filter(universidad =>
            universidad.modalidad === modalidad
        );
    }

    // Ordenar
    if (orden !== 'ninguno') {
        switch (orden) {
            case 'ranking':
                universidadesFiltradas.sort((a, b) => b.ranking - a.ranking); // Suponiendo que tienes un campo de ranking
                break;
            case 'ubicacion':
                universidadesFiltradas.sort((a, b) => a.direccion.localeCompare(b.direccion)); // Si tienes una ubicación
                break;
            case 'costo':
                universidadesFiltradas.sort((a, b) => a.costo - b.costo); // Orden por costo
                break;
            default:
                break;
        }
    }

    // Mostrar universidades después de aplicar los filtros
    mostrarProductos(universidadesFiltradas);
}
