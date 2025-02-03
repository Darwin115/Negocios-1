<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || UNID-APLICAR</title>

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
  <?php include 'HeaderUNID.php'; ?>  

  <!--Agregamos el formulario-->
  <section id="main-content">
    <h2>Formulario de Aplicación</h2>
    <div class="form-container">
      <form id="formulario-inscripcion">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido-paterno">Apellido Paterno:</label>
        <input type="text" id="apellido-paterno" name="apellido-paterno" required>

        <label for="apellido-materno">Apellido Materno:</label>
        <input type="text" id="apellido-materno" name="apellido-materno" required>

        <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required>

        <label for="correo-electronico">Correo Electrónico:</label>
        <input type="email" id="correo-electronico" name="correo-electronico" required>

        <label for="carrera">Carrera Deseada:</label>
        <select id="carrera" name="carrera" required>
          <option value="">Seleccione una carrera</option>
          <option value="Ingeniería en Tecnologías de la Información y Comunicaciones">Ingeniería en Tecnologías de la Información y Comunicaciones</option>
          <option value="Ingeniería en Gestión Empresarial">Ingeniería en Gestión Empresarial</option>
          <option value="Ingeniería Química">Ingeniería Química</option>
          <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
          <option value="Ingeniería Electrónica">Ingeniería Electrónica</option>
          <option value="Ingeniería Industrial">Ingeniería Industrial</option>
          <option value="Ingeniería en Materiales">Ingeniería en Materiales</option>
          <option value="Ingeniería Mecánica">Ingeniería Mecánica</option>
          <option value="Ingeniería en Semiconductores">Ingeniería en Semiconductores</option>
          <option value="Licenciatura en Administración">Licenciatura en Administración</option>
        </select>

        <div class="checkbox-container">
          <input type="checkbox" id="aviso-privacidad" class="checkbox-pequena" required>
          <label for="aviso-privacidad">Acepta nuestro&nbsp;<a href="../AVISO DE PRIVACIDAD.pdf" target="_blank" style="color: blue;"> Aviso de privacidad </a>&nbsp;para poder enviar la solicitud</label>
      </div>
      
      
        <br>

        <input type="submit" value="Enviar">
      </form>
    </div>
  </section>

  <!--<Pie de la página.-->
  <?php include '../../Footer.php'; ?>
  <!--Fin pie de la página.-->

<script>
    function getCareers() {
      var categoria = $('#select-categoria').val();
      $.ajax({
        type: "POST",
        url: "Consulta_UNID.php", // Ruta al archivo PHP que maneja la solicitud AJAX
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
