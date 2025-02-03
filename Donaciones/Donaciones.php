<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniversityMatch || DONACIONES</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-4M2DHVY2HW');
    </script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../Estilos/style.css">
    <link rel="stylesheet" href="./Donaciones.css">
    <link rel="stylesheet" href="../Estilos/FooterStyle.css">
    <link rel="stylesheet" href="../Estilos/TestStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="./scriptnav.js"></script>
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

<body onload="iniciarLectura(), abrirAcce()">
<?php include '../header.php'; ?>

  <div class="container">
    <h2 class="titulo">Unidos por la Educación: Da y Recibe para un Futuro Brillante</h2>
    <p class="text-center">Selecciona una opción para proceder con la solicitud o la oferta de donación.</p>

    <div class="row">
      <!-- Requiero una Donación -->
      <div class="col-md-4 text-center producto">
          <a href="BuscarDonacion.php" class="card-link">
              <div class="card">
                  <div class="card-content text-center">
                      <h3 class="nombre">Requiero una Donación</h3>
                      <p class="descripcion">¿Necesitas recursos o materiales para continuar con tus 
                          estudios o proyectos? En esta sección, puedes solicitar donaciones de bienes como 
                          libros, material escolar, equipos tecnológicos y otros recursos esenciales. Nuestro 
                          objetivo es ayudarte a acceder a los elementos que necesitas para alcanzar tus metas 
                          académicas y profesionales. Completa el formulario y te conectaremos con quienes están 
                          dispuestos a ofrecer lo que necesitas para avanzar en tu educación y desarrollo.</p>
                  </div>
              </div>
          </a>
      </div>
      <!-- Quiero Hacer una Donación -->
      <div class="col-md-4 text-center producto">
          <a href="HacerDonacion.php" class="card-link">
              <div class="card">
                  <div class="card-content text-center">
                      <h3 class="nombre">Quiero Hacer una Donación</h3>
                      <p class="descripcion">¿Tienes materiales, libros, equipos tecnológicos u otros recursos que 
                          te gustaría donar para apoyar a estudiantes que los necesitan? Aquí puedes conocer 
                          cómo puedes contribuir con tus bienes para marcar una diferencia en la vida de quienes 
                          están en busca de estos recursos. Tu generosidad en forma de donaciones físicas puede 
                          proporcionar el apoyo necesario para que los estudiantes continúen con sus estudios y 
                          proyectos. Gracias por tu disposición a compartir lo que tienes y ayudar a construir un 
                          futuro educativo más accesible para todos.</p>
                  </div>
              </div>
          </a>
      </div>
  </div>
  </div>

  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->
    
  <script src="/script.js"></script>

  </body>
</html>