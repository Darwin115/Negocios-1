<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || ITA-INFORMACIÓN GENERAL</title>

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
  <?php include 'HeaderITA.php'; ?>
  
  <!--Agregamos la información de la universidad-->
  <section id="prodetails">
    <div class="info">
        <h1><strong>MISIÓN</strong></h1>
        <p>Ofrecer educación superior tecnológica de calidad, para formar profesionistas que sean agentes de cambio, con la capacidad de generar conocimiento e innovación en su campo profesional, desempeñarse de manera ética, moral, incluyente y comprometida con el desarrollo sustentable y sostenible, e insertarse con éxito en la comunidad global.</p>
    </div>
    <div class="info">
        <h1><strong>VISIÓN</strong></h1>
        <p>Ser una Institución de Educación Superior Tecnológica reconocida internacionalmente por su Calidad Académica al generar conocimiento para el desarrollo sostenible y equitativo, de la humanidad.</p>
    </div>
  </section>

  <section id="prodetailsMascota">
    <div class="info">
        <h2>Mascota del Instituto Tecnológico de Aguascalientes</h2>
        <p>Durante la gestión administrativa del Ing. Agustín Vázquez Vera como Director del Instituto Tecnológico Regional de Aguascalientes, se convocó a los alumnos, clubes deportivos y maestros para que, previo concurso, seleccionar el símbolo o mascota de la Institución.
        <br><br>Es así como triunfó el alumno Víctor Manuel Medellín Delgado con su alegoría de una águila real, con su birrete en la cabeza, y en el frente del birrete las siglas del Instituto, en la parte izquierda un engrane mecánico significando en tiempos pasados, aquí en el “Cerrito de la Cruz” el “Cerrito de las Liebres” habitaban algunas águilas reales y como recuerdo a estos hermosos pobladores de la tierra y dada su gallardía y majestuosidad se sigue perseverando esa tónica en el estudiante del Instituto Tecnológico de Aguascalientes.
        <br><br>Al paso de los años, el Instituto Tecnológico de Aguascalientes ha mantenido el espíritu de su mascota, el águila real, que hace alusión al águila del escudo nacional mexicano y símbolo que fortalece el sentido de pertenencia de la actitud y espíritu de estudiantes, maestros y personal de apoyo a la educación del Instituto Tecnológico de Aguascalientes.</p>
     </div>
    <div class="infoMascota">
        <img src="../../img/uniPics/ITA/Mascota.jpg" id="ImgPrinc" alt="Dell_7480" title="Dell 7480">
    </div>
  </section>

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
