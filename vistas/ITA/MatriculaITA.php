<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || ITA-MATRÍCULA</title>

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

  <!--Agregamos la imagen principal del producto y la información-->
<h2>Costo de Matriculas</h2>
  <table>
    <tr>
        <th class="centro">Carrera</th>
        <th class="centro">Semestral</th>
        <th class="centro">Anual</th>
    </tr>
    <tr>
        <td>Ingeniería en Tecnologías de la Información y Comunicaciones</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Gestión Empresarial</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Química</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Eléctrica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Electrónica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Industrial</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Materiales</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Mecánica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Semiconductores</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Licenciatura en Administración</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
</table>

  <!--<Pie de la página.-->
  <?php include '../../Footer.php'; ?>
  <!--Fin pie de la página.-->

</body>

</html>
