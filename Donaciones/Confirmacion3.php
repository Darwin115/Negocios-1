<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UniversityMatch || CONFIRMACIÓN DE COMPRA</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-4M2DHVY2HW');
    </script>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Estilos -->
    <link rel="stylesheet" href="../Estilos/style.css">
    <link rel="stylesheet" href="../Estilos/FooterStyle.css">
    <link rel="stylesheet" href="../Estilos/TestStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="./scriptnav.js"></script>

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="../img/Logo3.png" rel="icon">

    <!-- Estilos personalizados para el botón -->
    <style>
        /* Estilos personalizados para el botón "Volver al inicio" */
        .volver-btn {
            background-color: #238ac7; /* Color de fondo por defecto */
            border: 2px solid #238ac7; /* Borde del mismo color */
            color: white; /* Letras blancas */
            padding: 10px 20px; /* Espaciado interior */
            text-transform: uppercase; /* Texto en mayúsculas */
            font-weight: bold; /* Negritas */
            border-radius: 5px; /* Bordes redondeados */
            transition: all 0.3s ease; /* Transición suave para los efectos */
            text-decoration: none; /* Eliminar subrayado del enlace */
        }

        .volver-btn:hover, .volver-btn:focus {
            background-color: black; /* Fondo negro cuando el cursor está sobre el botón */
            border-color: black; /* Borde negro */
            color: white; /* Letras blancas */
        }

        .contactar-btn {
            background-color: black; /* Fondo negro por defecto */
            border: 2px solid black; /* Borde negro */
            color: white; /* Letras blancas */
            padding: 10px 20px; /* Espaciado interior */
            text-transform: uppercase; /* Texto en mayúsculas */
            font-weight: bold; /* Negritas */
            border-radius: 5px; /* Bordes redondeados */
            transition: all 0.3s ease; /* Transición suave para los efectos */
            text-decoration: none; /* Eliminar subrayado del enlace */
        }

        .contactar-btn:hover, .contactar-btn:focus {
            background-color: #238ac7; /* Fondo azul cuando el cursor está sobre el botón */
            border-color: #238ac7; /* Borde azul */
            color: white; /* Letras blancas */
        }
    </style>
</head>

<body>
    <?php include '../header.php'; ?>

    <!-- Página de Confirmación -->
    <header class="page-header py-5 text-center" style="background-color: #246d96;">
        <div class="container text-center">
            <h1 class="text-white">¡Tu solicitud ha sido procesada con éxito!</h1>
            <p class="text-white">Gracias por confiar en nosotros. Tu solicitud de donación ha sido aprobada y está en proceso. Recibirás un correo con los detalles de tu pedido y el seguimiento.</p>
        </div>
    </header>

    <!-- Contenido de Confirmación -->
    <section class="confirmation-section py-5" style="background-color: #f0f0f0;">
    <div class="container text-center">
        <div class="confirmation-box bg-light p-5 rounded">
        <h2 class="font-weight-bold">Detalles de tu solicitud de donación</h2>
            <div class="product-image mb-4">
                <img src="confirmacion/Gabinete.jpg" alt="Gabinete Dell OptiPlex 7000" class="img-fluid" style="max-width: 30%; height: auto; border-radius: 10px;">
            </div>

            <div class="order-summary mb-4">
                <p><strong>Nombre del producto:</strong> Gabinete Dell OptiPlex 7000</p>
                <p><strong>Precio:</strong> 0.00 MXN</p>
                <p><strong>Costo de envío:</strong> 99.00 MXN</p>
                <p><strong>Descripción:</strong> Tower Business Desktop Computer, 12ª generación Intel 12-Core i7-12700, 32 GB DDR5 RAM, 1 TB PCIe SSD, Ethernet, adaptador USB WiFi, teclado y mouse, Windows 11 Pro</p>
            </div>

            <div class="order-details mb-4">
                <h3 class="font-weight-bold">Tu solicitud ha sido confirmada</h3>
                <p>Estamos gestionando tu donación. En breve, recibirás un correo con la factura, los detalles del envío y el seguimiento del paquete.</p>
                <p><strong>Stripe - 99.00 MXN</strong></p>
                <p><em>Gracias por tu paciencia, estamos encantados de poder apoyarte en este proceso.</em></p>
            </div>

            <a href="./Donaciones.php" class="btn volver-btn mb-2">Volver al inicio</a>
            <a href="../Contacto/contacto.php" class="btn contactar-btn">Contactar a Soporte</a>
        </div>
    </div>
</section>


    <!-- Pie de la página -->
    <?php include '../Footer.php'; ?>
    <!-- Fin pie de la página -->

    <script src="Donaciones.js"></script>
    <script src="Modal.js"></script>

    <a href="#" class="bt custom-btn back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- Stripe JS -->
    <script async src="https://js.stripe.com/v3/buy-button.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
