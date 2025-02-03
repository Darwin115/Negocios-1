<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>UniversityMatch || CONTACTO</title>

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
  <link rel="stylesheet" href="./CursosStyle.css">
  <link rel="stylesheet" href="../Estilos/FooterStyle.css">
  <link rel="stylesheet" href="../Estilos/TestStyle.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

  <!-- Favicons -->
  <link href="../img/Logo3.png" rel="icon">
  
  <style>
    .map_section {
      position: relative; /* Posiciona el contenedor de forma relativa */
      height: 100vh; /* Ajusta la altura deseada */
      overflow: hidden;
    }

    .map_section img {
      width: 100%; /* Ajusta la imagen al ancho del contenedor */
      height: 100%; /* Ajusta la imagen a la altura del contenedor */
      object-fit: cover; /* Mantiene la relación de aspecto */
      position: absolute; /* Asegura que la imagen esté detrás del formulario */
      top: 0;
      left: 0;
      z-index: 1; /* Asegura que la imagen esté detrás */
    }

    .form_container {
      position: absolute; /* Posiciona el formulario de forma absoluta */
      top: 50%; /* Centra verticalmente */
      left: 100px; /* Ajuste para que quede pegado a la izquierda */
      transform: translateY(-50%); /* Ajuste para centrar verticalmente */
      background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
      padding: 20px;
      border-radius: 10px; /* Esquinas redondeadas */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Sombra */
      max-width: 600px; /* Aumentar ancho máximo */
      max-height: 300px
      z-index: 2; /* Asegura que el formulario esté encima de la imagen */
    }
    .form_container form {
      margin: 0; /* Elimina el margen del formulario */
    }

    .form_container h3 {
      margin-bottom: 5px; /* Reduce el margen inferior del título */
    }
  </style>
</head>

<body onload="iniciarLectura(), abrirAcce()">
  <?php include '../Header.php'; ?>

  <!-- Sección con imagen y formulario -->
  <section class="map_section">
    <img src="images/Contacto.jpg" alt="Contacto">
    
    <div class="form_container">
      <div class="text-center">
        <h3>Contactanos</h3>
      </div>
      <form action="">
        <div>
          <input type="text" placeholder="Nombre" class="pt-3">
        </div>
        <div>
          <input type="text" placeholder="Teléfono">
        </div>
        <div>
          <input type="email" placeholder="Correo electrónico">
        </div>
        <div>
          <input type="text" class="message-box" placeholder="Mensaje">
        </div>
        <div class="d-flex justify-content-center">
          <button>Enviar</button>
        </div>
      </form>
    </div>
  </section>
  <!-- Fin imagen -->

  <!-- Información -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>Ubicación</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>+52 449 - 137 - 0279</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>universitymatch.com@gmail.com</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- Fin información -->

  <!-- Pie de la página -->
  <?php include '../Footer.php'; ?>
  <!-- Fin pie de la página -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
