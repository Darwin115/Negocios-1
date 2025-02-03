<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || REGISTRO</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4M2DHVY2HW');
  </script>

    <!-- Aplicación de los estilos css de Boostrap -->
  <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
    <!-- Estilos de registro personalizados  -->
  <link rel="stylesheet" type="text/css" href="../Registro/registro_form.css">
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
      color: rgb(0, 0, 0); 
      border: none; /* Eliminar borde */
      padding: 5px 10px; /* Espaciado interno */
      cursor: pointer; /* Cursor al pasar sobre el botón */
      border-radius: 5px; /* Borde redondeado */
      font-size: 16px; /* Tamaño del texto */
      margin-left: 0.2cm;
      margin-bottom: 0cm;
    }
  
    .buttonLec:hover {
      background-color: #246d96; /* Cambio de color al pasar sobre el botón */
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

<?php include '../header.php'; ?>
    
<section class ="registro_opcional">

 <!--Formulario-->

 <!-- Contenedor para el formulario -->
 <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-6 d-none d-md-block imagen-lado-izquierdo"></div>

          
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="w-75 contenedor-formulario">
                  
                    <p class="text-center mb-4">
                        Si le interesa estar al día en nuestra web y recibir notificaciones por correo, regístrese para no perderse nada.
                    </p>

                
                    <h2 class="text-center mb-4 titulo-registro">Registro de Usuario</h2>
                    
                  
                    <form>
                    
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="username" placeholder="Introduce tu nombre de usuario" required>
                        </div>
                        
                  
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="confirm-email" class="form-label">Confirmar Correo Electrónico</label>
                            <input type="email" class="form-control" id="confirm-email" placeholder="Confirma tu correo electrónico" required>
                        </div>
               
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terminos" required>
                            <label class="form-check-label" for="terminos">Acepto los <a href="#">términos y condiciones</a></label>
                        </div>
                   
                        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->








</body>
</html>
