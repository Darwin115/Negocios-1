<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || CATÁLOGO DE CARRERAS</title>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-4M2DHVY2HW');
  </script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="../Estilos/style.css">
  <link rel="stylesheet" href="./Carreras.css">
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

    /* Estilo del modal */
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1000; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0, 0, 0, 0.6); /* Fondo más oscuro */
      overflow: hidden;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 10% auto; /* Aumentar margen superior */
      padding: 20px;
      border: 1px solid #888;
      width: 80%; /* Ancho reducido */
      max-width: 500px; /* Ancho máximo */
      border-radius: 12px; /* Esquinas redondeadas */
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Sombra más suave */
    }

    #modalImagen {
    max-width: 100%; /* Limitar el ancho de la imagen */
    height: auto; /* Ajustar la altura automáticamente */
    border-radius: 8px; 
    margin-top: 10px; /* Espaciado superior */
}

    .close {
      color: #aaa;
      float: right; 
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
    
</head>

<body onload="iniciarLectura(), abrirAcce()">
  <?php include '../header.php'; ?>

  <div class="container">
    <!-- Barra de búsqueda -->
    <div class="filters-container1">
      <div class="search-bar">
        <input type="text" id="filtro" placeholder="Buscar por nombre">
        <button id="buscar">Buscar</button>
      </div>

       <!-- Filtro por área de estudio -->
       <select id="categoria">
            <option value="ninguno">Filtrar por área de estudio</option>
            <option value="soc">Ciencias Sociales</option>
            <option value="bio">Ciencias Biológicas</option>
            <option value="fm">Ciencias Físico-Matemáticas</option>
            <option value="hum">Arte y Humanidades</option>
            <option value="salud">Salud</option>
            <option value="ingenieria">Ingeniería</option>
            <option value="negocios">Negocios y Economía</option>
        </select>

        <!-- Filtro por duración de la carrera -->
        <select id="duracion">
            <option value="ninguno">Filtrar por duración de carrera</option>
            <option value="corta">Menos de 3 años</option>
            <option value="media">3 a 5 años</option>
            <option value="larga">Más de 5 años</option>
        </select>

        <!-- Filtro por costo de la carrera -->
        <select id="costo">
            <option value="ninguno">Filtrar por costo</option>
            <option value="bajo">Bajo</option>
            <option value="medio">Medio</option>
            <option value="alto">Alto</option>
        </select>

        <!-- Ordenar por opciones -->
        <select id="orden">
            <option value="ninguno">Ordenar por</option>
            <option value="ranking">Ranking</option>
            <option value="ubicacion">Ubicación</option>
            <option value="costo">Costo (bajo a alto)</option>
            <option value="duracion">Duración</option>
        </select>
    </div>
  </div>

  <br>

  <div class="row" id="res"></div>

<!-- Modal -->
<div id="backgroundBlur" class="background-blur"></div>
  
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3 id="modalNombre" style="font-size: 2em; color: rgb(27, 152, 206); margin-bottom: 15px;"></h3>
      <p id="modalDescripcion" style="text-align: justify; line-height: 1.5;"></p>
      <h5 style="font-size: 1.5em; font-weight: bold; text-align: left; margin-bottom: 10px;">Misión</h5>
      <p id="modalMision" style="text-align: justify; line-height: 1.5;"></p>
      <h5 style="font-size: 1.5em; font-weight: bold; text-align: left; margin-bottom: 10px;">Visión</h5>
      <p id="modalVision" style="text-align: justify; line-height: 1.5;"></p>
      <h5 style="font-size: 1.5em; font-weight: bold; text-align: left; margin-bottom: 10px;">Objetivos</h5>
      <ul id="modalObjetivos" style="text-align: justify; line-height: 1.5; margin-left: 20px;"></ul>
      <img id="modalImagen" src="" alt="Imagen de la carrera" style="max-width: 100%; border-radius: 8px; margin-top: 10px;">
      <button id="conocerUniversidades" class="btn-success">Conocer Universidades</button>
    </div>
  </div>
<!-- Fin modal -->
  
  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->
    
  <script src="/script.js"></script>
  <script src="Carreras.js"></script>
  </body>
</html>

