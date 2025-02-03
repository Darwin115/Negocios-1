<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || UP-INICIO</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4M2DHVY2HW');
  </script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" type="text/css" href="../../Estilos/style.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/stylevistaproductos.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/FooterStyle.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/Universidades.css">
  <link rel="stylesheet" type="text/css" href="../../Donaciones/css/style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-GDWlJng9xEwG1eYTTvWe4H9fA1Idb51fbrYw5YK51m6JzCj5lCR4gI6Rbmu1nCrXOjW1QrR7TjDXXESmtv5D5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Favicons -->
  <link href="../../img/Logo3.png" rel="icon">
  <style>
    .buttonLec {
      background-color: #ffffff;
      color: #246d96;
      border: none;
      /* Eliminar borde */
      width: 35px;
      height: 35px;
      /* Espaciado interno */
      cursor: pointer;
      /* Cursor al pasar sobre el botón */
      border-radius: 100px;
      /* Borde redondeado */
      font-size: 12px;
      /* Tamaño del texto */

    }

    .buttonLec:hover {
      background-color: #ebebebf6;
      /* Cambio de color al pasar sobre el botón */
    }
  </style>
</head>

<body onload="iniciarLectura()">
  <?php include '../../Header.php'; ?>
  <?php include 'HeaderUP.php'; ?>

  <!--Agregamos la imagen principal del producto y la información-->
  <section id="prodetails">
    <div class="single-pro-image">
      <img src="../../img/uniPics/UP/UPL.jpg" id="ImgPrinc" alt="Dell_7480" title="3">
      <div class="small-img-group">
        <div class="small-img-col">
          <img src="../../img/uniPics/UP/UPL.jpg" width="100" alt="Dell_7480" title="3">
        </div>
        <div class="small-img-col">
          <img src="../../img/uniPics/UP/UP2.jpg" width="100" alt="Dell_7480" title="2">
        </div>
        <div class="small-img-col">
          <img src="../../img/uniPics/UP/UP3.jpg" width="100" alt="Dell_7480" title="4">
        </div>
        <div class="small-img-col">
          <img src="../../img/uniPics/UP/UP1.jpg" width="100" alt="Dell_7480" title="1">
        </div>
      </div>
    </div>
    <div class="info">
      <h1><strong>UP - Universidad Panamericana</strong></h1>
      <p>El campus Aguascalientes es una de las tres sedes que tiene la Universidad Panamericana en la República Mexicana. Esta sede tiene una oferta académica de 10 licenciaturas y 7 ingenierías; además, cuenta con 13 especialidades y 16 maestrías. Contando todos los campus, la UP tiene alrededor de 12,000 alumnos. Entre los reconocimientos que sus estudiantes han recibido se encuentran:
      </p>
      <ul style="margin-top: 10px; margin-bottom: 10px;">
        <li>Premio a la originalidad en concurso TUAPP en 2017.</li>
        <li>Reconocimiento como una de las 50 empresas más innovadoras de la Revista Information Week en 2015.</li>
        <li>Participación en la Feria de la UPO de la ONU para el establecimiento de alianzas laborales y de desarrollo con estas importantes instituciones internacionales.</li>
      </ul>
      </div>
  </section>



  <section id="inter">
    <section id="ininterImg" style="display: flex; align-items: center; justify-content: center;">
      <div class="infointer">
        <img src="../../img/anuncios/Anuncio1.jpg" alt="Anuncio">
      </div>
      <div class="infointer">
        <video src="../../videos/Inter1.mp4" controls alt="Intérprete" autoplay loop muted style="max-height: 100%; max-width: 100%;"></video>
      </div>
    </section>
  </section>
    

  <section id="mapa">
    <h2>Ubicación</h2>
    <div id="map" style="height: 400px;"></div>
  </section>

  <br>

  <h2>Califica esta Universidad</h2>

  <br>
  <br>

  <div class="product-detail">
        <div class="row">                     
            <div class="row product-detail-bottom">
                <div class="tab-content">
                    <div class="reviews-submitted">
                        <div class="reviewer">Phasellus Gravida - <span>01 Ene 2020</span></div>
                        <div class="ratting">
                          <i class="fas fa-heart"></i>
                          <i class="fas fa-heart"></i>
                          <i class="fas fa-heart"></i>
                          <i class="fas fa-heart"></i>
                          <i class="fas fa-heart"></i>
                        </div>
                        <p>
                            Mi experiencia en el UP ha sido increíble. Desde el primer día, me sentí acogido por un ambiente cálido y un equipo docente apasionado. Los programas académicos son desafiantes y están siempre actualizados, lo que me ha permitido aprender de manera efectiva. Las instalaciones son modernas y están bien equipadas, lo que facilita mucho el estudio. Además, la vida estudiantil es muy activa, con un montón de clubes y actividades que hacen que la experiencia universitaria sea muy enriquecedora.
                        </p>
                    </div>
                    <div class="reviews-submit">
                        <h4>Deja tu Reseña</h4>
                        <div class="ratting">
                        <i class="fas fa-heart estrella-item"></i>
                        <i class="fas fa-heart estrella-item"></i>
                        <i class="fas fa-heart estrella-item"></i>
                        <i class="fas fa-heart estrella-item"></i>
                        <i class="fas fa-heart estrella-item"></i>
                        </div>
                        <div class="row form">
                            <div class="col-sm-12 form-group">
                                <input type="text" id="nombre" placeholder="Nombre">
                                <input type="email" id="email" placeholder="Email">
                            </div>
                            <textarea id="comentario" placeholder="Reseña"></textarea>
                            <div class="col-sm-12">
                                <button type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  <!--<Pie de la página.-->
  <?php include '../../Footer.php'; ?>
  <!--Fin pie de la página.-->

<script>
  var MainImg = document.getElementById("ImgPrinc");
  var smallimgs = document.getElementsByClassName("small-img-col"); // Cambié el selector

  smallimgs[0].onclick = function () {
    MainImg.src = this.querySelector('img').src; // Cambié smallimg[0] a this
  }
  smallimgs[1].onclick = function () {
    MainImg.src = this.querySelector('img').src; // Cambié smallimg[1] a this
  }
  smallimgs[2].onclick = function () {
    MainImg.src = this.querySelector('img').src; // Cambié smallimg[2] a this
  }
  smallimgs[3].onclick = function () {
    MainImg.src = this.querySelector('img').src; // Cambié smallimg[3] a this
  }

</script>

  <script>
    function getCareers() {
      var categoria = $('#select-categoria').val();
      $.ajax({
        type: "POST",
        url: "Consulta_UP.php", // Ruta al archivo PHP que maneja la solicitud AJAX
        data: {
          categoria: categoria
        },
        dataType: 'json',
        success: function(response) {
          // Limpiar la lista de carreras
          $('#lista-carreras ul').empty();
          // Agregar cada carrera a la lista
          response.forEach(function(carrera) {
            $('#lista-carreras ul').append('<li>' + carrera + '</li>');
          });
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

  <script>
    // Agregar comentario
    document.getElementById('formulario-comentario').addEventListener('submit', function(event) {
      event.preventDefault();
      var nombre = document.getElementById('nombre').value;
      var comentario = document.getElementById('comentario').value;
      var comentarioHTML = '<div><strong>' + nombre + ':</strong> ' + comentario + '</div>';
      document.getElementById('comentarios-lista').innerHTML += comentarioHTML;
      // Limpiar los campos del formulario después de enviar
      document.getElementById('nombre').value = '';
      document.getElementById('comentario').value = '';
    });

  </script>

  <script>
    function initMap() {
      // Coordenadas del Instituto Tecnológico de Aguascalientes
      var upCoords = {
        lat: 21.824504816100678,
        lng: -102.28381049629915
      };

      // Crear el mapa
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: upCoords
      });

      // Marcador en la ubicación del Instituto Tecnológico de Aguascalientes
      var marker = new google.maps.Marker({
        position: upCoords,
        map: map,
        title: 'Instituto Tecnológico de Aguascalientes'
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDFMWxzIm2U40wfcYVDDOXdKsOVIm6S4A&callback=initMap" async defer></script>

  <script src="../Corazones.js"></script>

</body>

</html>
