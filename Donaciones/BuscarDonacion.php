<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UniversityMatch || BUSCAR DONACIÓN</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4M2DHVY2HW');
    </script>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="stylesheet" href="../Estilos/style.css">
    <link rel="stylesheet" href="./BusDonaciones.css">
    <link rel="stylesheet" href="Modal.css">
    <link rel="stylesheet" href="../Estilos/FooterStyle.css">
    <link rel="stylesheet" href="../Estilos/TestStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="./scriptnav.js"></script>

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
</head>

<body>
    <?php include '../header.php'; ?>
    <?php include 'HeaderDonaciones.php'; ?>
    
    <p class="text-center">Explora nuestras donaciones disponibles a continuación. Si necesitas algo específico, ¡contáctanos y te ayudaremos a encontrarlo!</p>
    <span>&nbsp;&nbsp;&nbsp;</span>
    <h5 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem; font-weight: bold; background-color: #246d96; color: white; padding: 15px; border-radius: 5px;">
        Productos varios disponibles para donación
    </h5>
<div class="row" id="res"></div>

    <!-- Modal -->
    <div id="backgroundBlur" class="background-blur"></div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3 id="modalNombre"></h3>
            <p id="modalDescripcion"></p>
        </div>
    </div>
    <!-- Fin modal -->

    <!-- Stripe Buttons --> 
    <h5 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem; font-weight: bold; background-color: #246d96; color: white; padding: 15px; border-radius: 5px; margin-top: 35px;">
        Productos únicos disponibles para donación
    </h5>
<div style="background-color: #f0f0f0; padding: 30px 0;">
    <div class="container my-5">
        <div class="d-flex justify-content-center flex-wrap gap-3" style="gap: 40px;">
            <div style="padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <stripe-buy-button
                    buy-button-id="buy_btn_1QTbWkGLTd2KJPhtd4fgVpEK"
                    publishable-key="pk_test_51QTam8GLTd2KJPhtlEXaW1O2OXBuuyetiWhu1njYJFKnkiuzesSMAZOTnT4bOPKWw6nTG4nU6ujZ4cFII0NQyHwA00mifrCAIt">
                </stripe-buy-button>
            </div>
            <div style="padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <stripe-buy-button
                    buy-button-id="buy_btn_1QTbYDGLTd2KJPhtt7xLPIPQ"
                    publishable-key="pk_test_51QTam8GLTd2KJPhtlEXaW1O2OXBuuyetiWhu1njYJFKnkiuzesSMAZOTnT4bOPKWw6nTG4nU6ujZ4cFII0NQyHwA00mifrCAIt">
                </stripe-buy-button>
            </div>
            <div style="padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <stripe-buy-button
                    buy-button-id="buy_btn_1QTbZLGLTd2KJPht2YsOcWRB"
                    publishable-key="pk_test_51QTam8GLTd2KJPhtlEXaW1O2OXBuuyetiWhu1njYJFKnkiuzesSMAZOTnT4bOPKWw6nTG4nU6ujZ4cFII0NQyHwA00mifrCAIt">
                </stripe-buy-button>
            </div>
            <div style="padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <stripe-buy-button
                    buy-button-id="buy_btn_1QTbauGLTd2KJPhtAZjzZb3A"
                    publishable-key="pk_test_51QTam8GLTd2KJPhtlEXaW1O2OXBuuyetiWhu1njYJFKnkiuzesSMAZOTnT4bOPKWw6nTG4nU6ujZ4cFII0NQyHwA00mifrCAIt">
                </stripe-buy-button>
            </div>
        </div>
    </div>
</div>



    <!--<Pie de la página.-->
    <?php include '../Footer.php'; ?>
    <!--Fin pie de la página.-->
    
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