<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniversityMatch || CATÁLOGO DE UNIVERSIDADES</title>

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
    <link rel="stylesheet" href="./CatalogoStyle.css">
    <link rel="stylesheet" href="../Estilos/FooterStyle.css">
    <link rel="stylesheet" href="../Estilos/TestStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="./scriptnav.js"></script>
    <!-- Favicons -->
    <link href="../img/Logo3.png" rel="icon">
    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    .container {
      width: 100%; /* Ocupa todo el ancho de la pantalla */
      max-width: 100%; /* Garantiza que no haya restricciones */
      margin: 0; /* Quitar márgenes externos */
      padding: 10px 20px; /* Espaciado interno */
    }

    /* Barra de búsqueda */
    .search-bar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      width: 100%; /* Asegura el 100% de ancho */
    }

    .search-bar input {
      flex-grow: 1;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px 0 0 5px;
      outline: none;
    }

    .search-bar button {
      padding: 10px 20px;
      background-color: #4ebbc5;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
      border-radius: 0 5px 5px 0;
    }

    .search-bar button:hover {
      background-color: #47a8b3;
    }

    /* Filtros */
    .filters-container1 {
      display: flex; 
      flex-wrap: wrap; 
      justify-content: space-between;
      align-items: center;
      width: 100%; 
      gap: 15px; 
      background-color: rgb(27, 152, 206);
      padding: 15px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
      border-radius: 5px;
      align-content: center;
    }

    .filters-container1 select {
      flex: 1; 
      min-width: 150px;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      background-color: while;
    }

    .filters-container1 select option:hover {
      background-color: white; /* Fondo blanco */
      color: black; /* Texto negro */
      border: 1px solid black; /* Bordes negros */
    }


    .filters-container1 select option {
      background-color: black; /* Fondo negro */
      color: white; /* Texto blanco */
    }

    .filters-container1 select:focus {
      outline: none;
      border-color: black;
      box-shadow: 0 0 5px black;
    }

    @media screen and (max-width: 768px) {
      .filters-container1 {
        flex-direction: column; 
      }

      .filters-container1 select {
        width: 100%; 
      }
    }
    </style>
</head>

<body onload="iniciarLectura() , abrirAcce()">
  <?php include '../Header.php'; ?>

  <div class="container">
    <!-- Barra de búsqueda -->
    <div class="filters-container1">
      <div class="search-bar">
        <input type="text" id="filtro" placeholder="Buscar por nombre">
        <button id="buscar">Buscar</button>
      </div>

      <select id="categoria">
          <option value="ninguno">Filtrar por categoría</option>
            <option value="soc">Ciencias Sociales</option>
            <option value="bio">Ciencias Biológicas</option>
            <option value="fm">Ciencias Físico-Matemáticas</option>
            <option value="hum">Arte y Humanidades</option>
      </select>

      <select id="nivel">
          <option value="ninguno">Filtrar por tipo de universidad</option>
          <option value="publica">Universidad Pública</option>
          <option value="privada">Universidad Privada</option>
          <option value="gratuidad">Universidades Gratuitas</option>
      </select>

      <select id="modalidad">
          <option value="ninguno">Filtrar por modalidad</option>
          <option value="presencial">Presencial</option>
          <option value="online">En línea</option>
          <option value="mixto">Híbrido</option>
      </select>

      <select id="orden">
          <option value="ninguno">Ordenar por</option>
          <option value="ranking">Ranking</option>
          <option value="ubicacion">Ubicación</option>
          <option value="costo">Costo (bajo a alto)</option>
      </select>
    </div>
  </div>

  <br>

  <div class="row" id="res"></div>

  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->

  <!--Scripts-->
  <script src="/script.js"></script>
  <script src="catalogo.js"></script>
  <!--Fin scripts-->
  </body>
</html>