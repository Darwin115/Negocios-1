<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || ITA-QUÍMICA</title>

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
    <div class="infoRetiImg", style="text-align: center;"><img src="../img/uniPics/ITA/Carreras/IQ.png" alt=""></div>
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
            <li>Diseñar,  seleccionar, operar, optimizar y controlar procesos en industrias químicas y de servicios con base en el desarrollo tecnológico de acuerdo a las normas de higiene y seguridad, de manera sustentable.</li>
            <li>Colaborar en equipos interdisciplinarios y multiculturales en su ámbito laboral, con actitud innovadora, espíritu crítico, disposición al cambio y apego a la ética profesional.</li>
            <li>Planear e implementar sistemas de gestión de calidad, ambiental e higiene y seguridad en los diferentes sectores, conforme a las normas nacionales e internacionales.</li>
            <li>Utilizar las tecnologías de la información y comunicación como herramientas en la construcción de soluciones a problemas de ingeniería y difundir el conocimiento científico y tecnológico.</li>
            <li>Realizar innovación y adaptación de tecnología en procesos aplicando la metodología científica, con respeto a la propiedad intelectual.</li>
            <li>Utilizar un segundo idioma en su ámbito laboral según los requerimientos del entorno.</li>
            <li>Comunicarse en forma oral y escrita en el ámbito laboral de manera expedita y concisa.</li>
            <li>Poseer actitud creativa, emprendedora y de liderazgo para impulsar y crear empresas que contribuyan al progreso nacional.</li>
            <li>Administrar recursos humanos, materiales y financieros para los sectores público y privado, acorde  a modelos administrativos vigentes.</li>
            <li>Poseer actitudes de superación continua para lograr metas personales y profesionales con pertinencia y competitividad.</li>
            <li>Dar seguimiento a programas de mantenimiento a equipos e instalaciones, control de producción y productividad.</li>
        </ul>
    </div>
  </section>
  
  <h2>RETÍCULA</h2>
  <section id="inRetiImg">
      <div class="infoRetiImg", style="text-align: center;"><img src="../img/uniPics/ITA/Reticulas/RetiIQ.jpg" alt=""></div>
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
