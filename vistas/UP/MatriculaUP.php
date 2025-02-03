<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || UP-MATRÍCULA</title>

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
  <?php include 'HeaderUP.php'; ?>  

  <!--Agregamos la imagen principal del producto y la información-->
  <h2>Costo de Matrículas</h2>
<table>
    <tr>
        <th class="centro">Carrera</th>
        <th class="centro">Semestral</th>
        <th class="centro">Anual</th>
    </tr>
    <tr>
        <td>Programas de Pregrado Tradicionales</td>
        <td class="centro">$7,500 MXN</td>
        <td class="centro">$15,000 MXN</td>
    </tr>
    <tr>
        <td>Programas de Pregrado No Tradicionales</td>
        <td class="centro">$4,250 MXN</td>
        <td class="centro">$8,500 MXN</td>
    </tr>
    <tr>
        <td>Programas de Posgrado Tradicionales</td>
        <td class="centro">$10,000 MXN</td>
        <td class="centro">$20,000 MXN</td>
    </tr>
    <tr>
        <td>Programas de Posgrado No Tradicionales</td>
        <td class="centro">$6,500 MXN</td>
        <td class="centro">$13,000 MXN</td>
    </tr>
</table>



  <!--<Pie de la página.-->
  <?php include '../../Footer.php'; ?>
  <!--Fin pie de la página.-->

</body>

</html>
