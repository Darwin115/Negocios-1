console.log('correcto');
let datos;

document.querySelector('#buscar').addEventListener('click', function () {
    const filtro = document.getElementById('filtro').value;
    buscarCursos(filtro);
});

traerDatos();

function traerDatos() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'Cursos.json', true); // Asegúrate de que esta ruta sea correcta
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                try {
                    datos = JSON.parse(this.responseText);
                    mostrarCursos(datos);
                } catch (error) {
                    console.error('Error al parsear JSON:', error);
                }
            } else {
                console.error('Error en la solicitud:', this.status);
            }
        }
    };
}

function mostrarCursos(cursos) {
    let res = document.querySelector('#res');
    res.innerHTML = '';

    for (let curso of cursos) {
        if (curso.nombre && curso.acronimo && curso.direccion && curso.telefono && curso.url && curso.foto) {
            res.innerHTML += `
            <div class="col-md-4 text-center producto">
                <div class="card" style="margin: 10px;">
                    <div class="card-content">
                        <h2 class="text-center text-dark">
                            ${curso.acronimo}
                        </h2>
                        <h3 class="text-center text-primary text-dark nombre">
                            ${curso.nombre}
                        </h3>
                        <a href="${curso.url}">
                            <img class="text-center" src="${curso.foto}" alt="">
                        </a>
                        <h5 class="direccion">
                            ${curso.direccion}
                        </h5>
                        <h4 class="text-center text-dark">
                            ${curso.telefono}
                        </h4>
                    </div>
                </div>
            </div>
            `;
        }
    }
}

function buscarCursos(filtro) {
    const cursosFiltrados = datos.filter(curso =>
        curso.nombre.toLowerCase().includes(filtro.toLowerCase()) ||
        curso.acronimo.toLowerCase().includes(filtro.toLowerCase())
    );
    mostrarCursos(cursosFiltrados);
}

function aplicarFiltros() {
    const categoria = document.getElementById('categoria').value;
    const nivel = document.getElementById('nivel').value;
    const modalidad = document.getElementById('modalidad').value;
    const orden = document.getElementById('orden').value;

    let cursosFiltrados = datos;

    // Filtrar por categoría
    if (categoria !== 'ninguno') {
        cursosFiltrados = cursosFiltrados.filter(curso =>
            curso.categoria.toLowerCase() === categoria.toLowerCase()
        );
    }

    // Filtrar por nivel
    if (nivel !== 'ninguno') {
        cursosFiltrados = cursosFiltrados.filter(curso =>
            curso.nivel.toLowerCase() === nivel.toLowerCase()
        );
    }

    // Filtrar por modalidad
    if (modalidad !== 'ninguno') {
        cursosFiltrados = cursosFiltrados.filter(curso =>
            curso.modalidad.toLowerCase() === modalidad.toLowerCase()
        );
    }

    // Ordenar
    if (orden !== 'ninguno') {
        switch (orden) {
            case 'popularidad':
                cursosFiltrados.sort((a, b) => b.popularidad - a.popularidad);
                break;
            case 'duracion':
                cursosFiltrados.sort((a, b) => a.duracion - b.duracion);
                break;
            case 'costo':
                cursosFiltrados.sort((a, b) => a.costo - b.costo);
                break;
            default:
                break;
        }
    }

    // Mostrar cursos después de aplicar los filtros
    mostrarCursos(cursosFiltrados);
}

// Agregar eventos para aplicar filtros al cambiar las opciones
document.getElementById('categoria').addEventListener('change', aplicarFiltros);
document.getElementById('nivel').addEventListener('change', aplicarFiltros);
document.getElementById('modalidad').addEventListener('change', aplicarFiltros);
document.getElementById('orden').addEventListener('change', aplicarFiltros);
