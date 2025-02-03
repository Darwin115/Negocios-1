traerDatos();

function traerDatos() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'UnisRecomendadas.json', true);

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
    let res = document.querySelector('#recomendadas');
    res.innerHTML = '';
    res.innerHTML = `<div class="titulo">
                        <h1>UNIVERSIDADES RECOMENDADAS<br></h1>
                    </div>
                    `;
    for (let producto of productos) {
        if (producto.nombre && producto.acronimo && producto.direccion && producto.telefono && producto.url && producto.foto) {
            res.innerHTML += `
            <div class="col-md-4 text-center producto">
                <div class="card" style="margin: 10px;">
                    <div class="card-content">
                        <div class="info">
                            <h2 class="text-center text-dark">
                                ${producto.acronimo}
                            </h2>
                            <h3 class="text-center text-primary text-dark nombre">
                                ${producto.nombre}
                            </h3>
                            <h5 class="direccion">
                                ${producto.direccion}
                            </h5>
                            <h4 class="text-center text-dark">
                                ${producto.telefono}
                            </h4>
                        </div>
                        <div class="imagen">
                            <a href="${producto.url}">
                                <img class="text-center" src="${producto.foto}" alt="">
                            </a>
                        </div>
                    </div>     
                </div>
            </div>
        `;
        }
    }
}

// Función para cargar y mostrar las universidades destacadas
function cargarDestacadas() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'UnisDestacadas.json', true);
    xhttp.send();
    
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4) {
        if (this.status == 200) {
          try {
            const destacadas = JSON.parse(this.responseText);
            mostrarDestacadas(destacadas);
          } catch (error) {
            console.error('Error al parsear JSON:', error);
          }
        } else {
          console.error('Error en la solicitud:', this.status);
        }
      }
    };
  }
  
  // Función para mostrar las universidades destacadas en la sección correspondiente
  function mostrarDestacadas(destacadas) {
    let res = document.querySelector('#destacadas');
    res.innerHTML = '';
    res.innerHTML = `<div class="titulo">
                        <h1>UNIVERSIDADES DESTACADAS<br></h1>
                    </div>
                    `;
    for (let destacada of destacadas) {
      if (destacada.nombre && destacada.acronimo && destacada.url && destacada.foto) {
        res.innerHTML += `
        <div class="col-md-4Des text-center productoDes">
            <div class="cardDes" style="margin: 10px;">
                <div class="card-contentDes">
                    <div class="infoDes">
                        <h2 class="text-center text-dark">
                            ${destacada.acronimo}
                        </h2>
                        <h3 class="text-center text-primary text-dark nombreDes">
                            ${destacada.nombre}
                        </h3>
                    </div>
                    <div class="imagenDes">
                        <a href="${destacada.url}">
                            <img class="text-center" src="${destacada.foto}" alt="">
                        </a>
                    </div>
                    <div class="estrellas">
                        <span class="estrella active" data-valor="1">&#9733;</span>
                        <span class="estrella active" data-valor="2">&#9733;</span>
                        <span class="estrella active" data-valor="3">&#9733;</span>
                        <span class="estrella" data-valor="4">&#9733;</span>
                        <span class="estrella" data-valor="5">&#9733;</span>
                    </div>
                </div>     
            </div>
        </div>
        `;
      }
    }
  }
  // Llama a la función para cargar y mostrar las universidades destacadas
  cargarDestacadas();
  
