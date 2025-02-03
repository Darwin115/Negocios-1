<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || ITA-ELÉCTRICA</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4M2DHVY2HW');
  </script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" type="text/css" href="../Estilos/style.css">
  <link rel="stylesheet" type="text/css" href="../Estilos/stylevistaproductos.css">
  <link rel="stylesheet" type="text/css" href="../Estilos/FooterStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-GDWlJng9xEwG1eYTTvWe4H9fA1Idb51fbrYw5YK51m6JzCj5lCR4gI6Rbmu1nCrXOjW1QrR7TjDXXESmtv5D5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Favicons -->
  <link href="../img/Logo3.png" rel="icon">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4LTLCWXEBE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-4LTLCWXEBE');
  </script>

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
  <?php include '../Header.php'; ?>
  <?php include '../vistas/ITA/HeaderITA.php'; ?>    

  <!--Agregamos la información de la universidad-->
  <section id="inRetiImg">
    <div class="infoRetiImg", style="text-align: center;"><img src="../img/uniPics/ITA/Carreras/IELECTRI.png" alt=""></div>
  </section>
  <h2>PERFIL DE INGRESO</h2>
  <section id="prodetails">
    <div class="infoReti">
        <p>Los aspirantes a ingresar en las Ingenierías ofrecidas por el Instituto Tecnológico de Aguascalientes deberán tener:</p>
        <ul>
            <li>Capacidad de análisis y síntesis.</li>
            <li>Pensamiento matemático.</li>
            <li>Comprensión lectora con capacidad para identificar y aplicar elementos de la lengua.</li>
            <li>Habilidad para resolver problemas en las áreas de matemáticas y física.</li>
            <li>Actitud crítica.</li>
        </ul>
    </div>
  </section>
  <h2>PERFIL DE EGRESO</h2>
  <section id="prodetails">
    <div class="infoReti">
        <ul>
            <li>Planear, diseñar, instalar y operar sistemas eléctricos de potencia; saber utilizar sistemas de energía eléctrica; así como sistemas de control y automatización, utilizando tecnología de punta.</li>
            <li>Diagnosticar y presentar soluciones a problemas relacionados con la calidad de la energía eléctrica.</li>
            <li>Promover y aplicar las acciones necesarias relacionadas con el desarrollo sustentable de manera responsable, legal y ética.</li>
            <li>Promover y realizar proyectos de investigación y desarrollo tecnológico.</li>
            <li>Adaptar nuevas tecnologías en la mejora de los procesos industriales, equipos y obras eléctricas.</li>
            <li>Utilizar las nuevas tecnologías de la información y comunicación.</li>
            <li>Poseer una visión emprendedora realizando actividades de consultoría estableciendo su propia empresa para coadyuvar en el desarrollo de su entorno.</li>
        </ul>
    </div>
  </section>
  
  <h2>RETÍCULA</h2>
  <section id="inRetiImg">
      <div class="infoRetiImg", style="text-align: center;"><img src="../img/uniPics/ITA/Reticulas/RetiIELECTRI.jpg" alt=""></div>
  </section>

  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
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
        url: "Consulta_ITA.php", // Ruta al archivo PHP que maneja la solicitud AJAX
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

</body>

</html>
