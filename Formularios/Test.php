<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || TEST VOCACIONAL</title>

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
  <link rel="stylesheet" type="text/css" href="../Estilos/TestStyle.css">
  <link rel="stylesheet" type="text/css" href="../Estilos/FooterStyle.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <script src="./scriptnav.js"></script>
  <!-- Favicons -->
  <link href="../img/Logo3.png" rel="icon">
  <style>
    /* Estilos para la ventana emergente modal */
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

    .modal {
      display: none; /* Ocultar la ventana modal por defecto */
      position: fixed; /* Posición fija */
      z-index: 1; /* Ubicar la ventana modal sobre el resto del contenido */
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto; /* Habilitar el desplazamiento si la ventana modal es demasiado grande */
      background-color: rgba(0,0,0,0.4); /* Fondo semi-transparente */
    }

    .modal-content {
      color:black;
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      max-width: 40%; /* Establecer un ancho máximo */
      width: auto; /* Establecer el ancho a automático para que se ajuste al contenido */
      height: 30%;
      box-sizing: border-box; /* Incluir padding y border en el ancho y alto */
      overflow: auto; /* Habilitar el desplazamiento si el contenido excede la altura */
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
<body onload="iniciarLectura()">

<?php include '../Header.php'; ?>
    
  <h1>Test Vocacional</h1>

  <form id="vocationalTest" onsubmit="calculateResults(); return false;">
    <label for="q1">1. ¿Cuál consideras que es tu mejor cualidad?</label>
    <input type="radio" name="q1" value="arte" data-points="40"> lógica<br>
    <input type="radio" name="q1" value="ciencia" data-points="10"> Juicio<br>
    <input type="radio" name="q1" value="deporte" data-points="20"> Empatía<br>
    <input type="radio" name="q1" value="humanidades" data-points="30"> Creatividad<br>

    <label for="q2">2. Tienes un problema que no puedes resolver. ¿Qué haces?</label>
    <input type="radio" name="q2" value="tecnologia" data-points="20"> Busco un tutorial<br>
    <input type="radio" name="q2" value="medioambiente" data-points="10"> Pruebo hasta resolverlo<br>
    <input type="radio" name="q2" value="historia" data-points="30"> Pido ayuda<br>
    <input type="radio" name="q2" value="economia" data-points="40"> Busco a alguien que tenga los conocimientos para que lo resuelva

    <label for="q3">3. Completa la frase: "Me gustaría que mi trabajo sirva para ..."</label>
    <input type="radio" name="q3" value="individual" data-points="30"> mejorar la vida de las personas<br>
    <input type="radio" name="q3" value="enEquipo" data-points="40"> construir un mundo mejor<br>
    <input type="radio" name="q3" value="alAireLibre" data-points="20"> ayudar a las personas<br>
    <input type="radio" name="q3" value="oficina" data-points="10"> unir a las personas<br>

    <label for="q4">4. Si tuvieras que escoger un hobby... ¿cuál sería?</label>
    <input type="radio" name="q4" value="problemasMatematicos" data-points="20"> Cocinar<br>
    <input type="radio" name="q4" value="creatividad" data-points="10"> Escribir<br>
    <input type="radio" name="q4" value="investigar" data-points="40"> Dibujar<br>
    <input type="radio" name="q4" value="trabajoManual" data-points="30"> Deporte<br>

    <label for="q5">5. ¿Qué imágen llama más tu atención?</label>
    <div>
        <img src="../img/utileria/r5.jpg" alt="Logo" title="Logo" width="400">
    </div>    
    <input type="radio" name="q5" value="cienciaFiccion" data-points="10"> a<br>
    <input type="radio" name="q5" value="historia" data-points="20"> b<br>
    <input type="radio" name="q5" value="tecnologia" data-points="30"> c<br>
    <input type="radio" name="q5" value="arteLiteratura" data-points="40"> d<br>

    <label for="q6">6. Completa la frase: "Prefiero trabajar con mi ..."</label>
    <input type="radio" name="q6" value="analitico" data-points="10"> Cuerpo<br>
    <input type="radio" name="q6" value="creativo" data-points="40"> Mente<br>


    <label for="q7">7. ¿Cuál considerarías como tu peor cualidad?</label>
    <input type="radio" name="q7" value="analitico" data-points="40"> Empatía<br>
    <input type="radio" name="q7" value="creativo" data-points="10"> Lógica<br>
    <input type="radio" name="q7" value="curioso" data-points="20"> Creatividad<br>
    <input type="radio" name="q7" value="practico" data-points="30"> Juicio<br>
  
    <label for="q8">8. Completa la frase: "Me considero una persona ..."</label>
    <input type="radio" name="q8" value="analitico" data-points="10"> Social<br>
    <input type="radio" name="q8" value="creativo" data-points="40"> Ambiciosa<br>
    <input type="radio" name="q8" value="curioso" data-points="20"> Activa<br>
    <input type="radio" name="q8" value="practico" data-points="30"> Creativa<br>
  
    <label for="q9">9. ¿Cómo prefieres trabajar?</label>
    <input type="radio" name="q9" value="analitico" data-points="10"> Individual<br>
    <input type="radio" name="q9" value="creativo" data-points="40"> En equipo<br>
  
    <label for="q10">10. ¿Qué asignatura te gusta más?</label>
    <input type="radio" name="q10" value="analitico" data-points="30"> Química<br>
    <input type="radio" name="q10" value="creativo" data-points="40"> Matemáticas<br>
    <input type="radio" name="q10" value="curioso" data-points="10"> Español<br>
    <input type="radio" name="q10" value="practico" data-points="20"> Educación física<br>

  <div id="results">
    <div style="text-align: center;"> 
      <input type="submit" id="btnObtenerResultado" value="Obtener Resultado">
    </div>
  </div>

  </form>
  
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div id="modal-result"></div>
    </div>
  </div>
  
  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->
    
  <script>
    function calculateResults() {
      // Obtener respuestas del formulario
      var q1 = parseInt(document.querySelector('input[name="q1"]:checked').getAttribute('data-points'));
      var q2 = parseInt(document.querySelector('input[name="q2"]:checked').getAttribute('data-points'));
      var q3 = parseInt(document.querySelector('input[name="q3"]:checked').getAttribute('data-points'));
      var q4 = parseInt(document.querySelector('input[name="q4"]:checked').getAttribute('data-points'));
      var q5 = parseInt(document.querySelector('input[name="q5"]:checked').getAttribute('data-points'));
      var q6 = parseInt(document.querySelector('input[name="q6"]:checked').getAttribute('data-points'));
      var q7 = parseInt(document.querySelector('input[name="q7"]:checked').getAttribute('data-points'));
      var q8 = parseInt(document.querySelector('input[name="q8"]:checked').getAttribute('data-points'));
      var q9 = parseInt(document.querySelector('input[name="q9"]:checked').getAttribute('data-points'));
      var q10 = parseInt(document.querySelector('input[name="q10"]:checked').getAttribute('data-points'));
  
      // Calcular el total de puntos
      var totalPoints = q1 + q2 + q3 + q4 + q5 + q6 + q7 + q8 + q9 + q10;
  
      // Lógica para determinar resultados
      var result = '';
  
      if (totalPoints >= 100 && totalPoints <= 200) {
        result = 'Tu carrera ideal está en el ámbito de ciencias sociales. Dirígete a la sección de universidades, hay más de una esperando por tí.';
      } else if (totalPoints >= 170 && totalPoints <= 220) {
        result = 'Tu carrera ideal está en el ámbito de artes y humanidades. Dirígete a la sección de universidades y descubre cuál es la ideal para tí.';
      } else if (totalPoints >= 230 && totalPoints <= 280) {
        result = 'Tu carrera ideal está en el ámbito de ciencias biológicas. Dirígete a la sección de universidades y descubre cuál es la ideal para tí.';
      } else if (totalPoints >= 290 && totalPoints <= 400) {
        result = 'Tu carrera ideal está en el ámbito de ciencias físico-matemáticas. Dirígete a la sección de universidades y descubre cuál es la ideal para tí.';
      } else {
        result = 'Otras opciones';
      }
  
      // Mostrar resultados en la página
      var resultsDiv = document.getElementById('results');
      resultsDiv.innerHTML = '<p>' + result + '</p>';
    }
  </script>
  
  <script>
    // Función para abrir la ventana modal y calcular resultados
    function openModal() {
      // Calcular los resultados
      calculateResults();
  
      // Obtener el resultado calculado
      var result = document.getElementById('results').innerHTML;
  
      // Mostrar el resultado en la ventana modal
      var modalResultDiv = document.getElementById('modal-result');
      modalResultDiv.innerHTML = result;
  
      // Mostrar la ventana modal
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
    }
  
    // Función para cerrar la ventana modal
    function closeModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
    }
  
    // Obtener el botón de obtener resultados por su ID
    var submitButton = document.getElementById('btnObtenerResultado');
  
    // Asignar evento onclick al botón de obtener resultados
    submitButton.onclick = function(event) {
      event.preventDefault(); // Evitar que el formulario se envíe y la página se recargue
      openModal(); // Llamar a la función para abrir la ventana modal
    }
  </script>
  



</body>
</html>
