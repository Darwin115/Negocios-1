<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || Inicio</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-4M2DHVY2HW');
  </script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="Estilos/style.css">
  <link rel="stylesheet" href="Estilos/Universidades.css">
  <link rel="stylesheet" href="Estilos/FooterStyle.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./scriptnav.js"></script>

  <!-- Favicons -->
  <link href="img/Logo3.png" rel="icon">
</head>

<body>
<?php include 'Header.php'; ?>

  <!--Banners-->
  <section id="container-slider">
    <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
    <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i
        class="fas fa-chevron-circle-right"></i></a>
    <ul class="listslider">
      <li><a itlist="itList_0" href="" class="item-select-slid"></a></li>
      <li><a itlist="itList_1" href=""></a></li>
      <li><a itlist="itList_2" href=""></a></li>
    </ul>
    <ul id="slider">
      <li style="background-image: url('img/Banners/ita.jpg'); z-index:0; opacity: 1;">
        <div class="content_slider">
          <div class="banner-titulo">
            <h2>¿Buscas alguna ingeniería?</h2>

            <a href="vistas/Vista_ITA.html" target="_blank" class="btnSlider">
              <div class="conoce" style="display: flex; align-items: center;">
                <p style="margin: 0;">CONOCE MÁS</p><span class="material-symbols-outlined">
                  arrow_right
                </span>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li style="background-image: url('img/Banners/UPA.jpg'); ">
        <div class="content_slider">
          <div class="banner-titulo">
            <h2>¿Buscas alguna ingeniería?</h2>

            <a href="vistas/Vista_ITA.html" target="_blank" class="btnSlider">
              <div class="conoce" style="display: flex; align-items: center;">
                <p style="margin: 0;">CONOCE MÁS</p><span class="material-symbols-outlined">
                  arrow_right
                </span>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li style="background-image: url('img/Banners/uvm.jpg'); ">
        <div class="content_slider">
          <div class="banner-titulo">
            <h2>Estudia con mirada profesional</h2>

            <a href="vistas/Vista_ITA.html" target="_blank" class="btnSlider">
              <div class="conoce" style="display: flex; align-items: center;">
                <p style="margin: 0;">CONOCE MÁS</p><span class="material-symbols-outlined">
                  arrow_right
                </span>
              </div>
            </a>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <!--Universidades Recomendadas-->
  <div id="recomendadas" class="row"></div>
  <!--Fin universidades recomendadas-->

  <!--Universidades Destacadas-->
  <div id="destacadas" class="row"></div>
  <!--Fin universidades destacadas-->

  <!--Carrusel-->
  <section id="carrusel" class="section-p1">
    <div class="carousel-unis-container">
      <div class="carousel-marcas">
        <a href="" title="Dell"><img src="img/uniLogos/ITA.png" alt="Dell" title="DELL"></a>
        <a href="" title="HP"><img src="img/uniLogos/UPA.jpg" alt="HP" title="HP"></a>
        <a href="" title="Acer"><img src="img/uniLogos/UTA.jpg" alt="Acer" title="ACER"></a>
        <a href="" title="Lenovo"><img src="img/uniLogos/UAA.jpg" alt="Lenovo" title="LENOVO"></a>
      </div>
    </div>
  </section>
  <!--Fin carrusel-->
  <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
  <!--<Pie de la página.-->
  <?php include 'Footer.php'; ?>
  <!--Fin pie de la página.-->

  <script src="Universidades.js"></script>
  <script src="banners.js"></script>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
  <script src="script.js"></script>

</body>

</html>