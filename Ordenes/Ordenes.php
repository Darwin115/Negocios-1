<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniversityMatch || ORDENES DE DONACIONES</title>

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
    <link rel="stylesheet" href="./Donaciones.css">
    <link rel="stylesheet" href="../Estilos/FooterStyle.css">
    <link rel="stylesheet" href="../Estilos/TestStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="./scriptnav.js"></script>
    <!-- Estilos Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="../img/Logo3.png" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }
        .order-table {
            margin-top: 30px;
        }
        /* Estilo para el título */
        .text-primary {
            color: #2980b9; /* Cambiar color del título */
        }

        /* Estilo para el botón de Ver Detalles */
        .btn-ver-detalles {
    border: 2px solid #2980b9; /* Contorno azul */
    background-color: #2980b9; /* Fondo azul */
    color: white; /* Letra blanca */
    padding: 10px 20px; /* Tamaño del botón */
    font-size: 16px; /* Tamaño de la letra */
    cursor: pointer; /* Cambiar cursor cuando se pasa por encima */
    border-radius: 5px; /* Bordes redondeados */
    transition: all 0.3s ease; /* Transición suave */
}

.btn-ver-detalles:hover {
    background-color: black; /* Fondo negro cuando se pasa el cursor */
    border-color: black; /* Contorno negro */
    color: white; /* Letra blanca */
}
    </style>
</head>

<body>
<?php include '../header.php'; ?>

    <!-- Título de la página -->
    <div class="container text-center my-5">
    <h1 style="color: #2980b9; font-weight: bold;">Órdenes de Donación</h1>
    <p style="color: #555; font-weight: bold;">Consulta el estado de tus órdenes pasadas y actuales.</p>
</div>



    <!-- Tabla de órdenes -->
    <div class="container order-table">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Producto</th>
                        <th>Estado</th>
                        <th>Monto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2024-12-01</td>
                        <td>Laptop Dell Latitude</td>
                        <td><span class="badge badge-warning">En Proceso</span></td>
                        <td>$99.00</td>
                        <td><button class="btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(1)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2024-11-28</td>
                        <td>Escritorio Modular</td>
                        <td><span class="badge badge-success">Completada</span></td>
                        <td>$120.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(2)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2024-11-20</td>
                        <td>Silla Ergonómica</td>
                        <td><span class="badge badge-danger">Cancelada</span></td>
                        <td>$50.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(3)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2024-11-15</td>
                        <td>Tablet Samsung Galaxy</td>
                        <td><span class="badge badge-success">Completada</span></td>
                        <td>$200.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(4)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2024-11-10</td>
                        <td>Monitor LG 27"</td>
                        <td><span class="badge badge-warning">En Proceso</span></td>
                        <td>$150.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(5)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>2024-11-05</td>
                        <td>Teclado Mecánico</td>
                        <td><span class="badge badge-success">Completada</span></td>
                        <td>$45.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(6)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>2024-11-02</td>
                        <td>Impresora Multifunción</td>
                        <td><span class="badge badge-warning">En Proceso</span></td>
                        <td>$300.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(7)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>2024-10-30</td>
                        <td>Smartphone Xiaomi</td>
                        <td><span class="badge badge-danger">Cancelada</span></td>
                        <td>$250.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(8)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>2024-10-25</td>
                        <td>Cámara Canon DSLR</td>
                        <td><span class="badge badge-success">Completada</span></td>
                        <td>$500.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(9)">Ver detalles</button></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>2024-10-20</td>
                        <td>Router TP-Link</td>
                        <td><span class="badge badge-warning">En Proceso</span></td>
                        <td>$75.00</td>
                        <td><button class="btn btn-ver-detalles btn-sm" data-toggle="modal" data-target="#orderDetailsModal" onclick="loadOrderDetails(10)">Ver detalles</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal de detalles de la orden -->
    <div class="modal fade" id="orderDetailsModal" tabindex="-1" role="dialog" aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailsModalLabel">Detalles de la Orden</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Producto:</strong> <span id="orderProduct"></span></p>
                    <p><strong>Fecha:</strong> <span id="orderDate"></span></p>
                    <p><strong>Estado:</strong> <span id="orderStatus"></span></p>
                    <p><strong>Descripción:</strong> <span id="orderDescription"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-ver-detalles" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <?php include '../Footer.php'; ?>

    <!-- Scripts Bootstrap y funcionalidad -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Datos ficticios para las órdenes
        const orders = {
    1: {
        product: "Laptop Dell Latitude",
        date: "2024-12-01",
        status: "En Proceso",
        description: "Laptop de uso empresarial con procesador Intel Core i5, 16GB RAM y 512GB SSD."
    },
    2: {
        product: "Escritorio Modular",
        date: "2024-11-28",
        status: "Completada",
        description: "Escritorio de oficina modular, ideal para ambientes de trabajo profesionales."
    },
    3: {
        product: "Silla Ergonómica",
        date: "2024-11-20",
        status: "Cancelada",
        description: "Silla ergonómica con soporte lumbar ajustable."
    },
    4: {
        product: "Tablet Samsung Galaxy",
        date: "2024-11-15",
        status: "Completada",
        description: "Tablet Samsung Galaxy Tab S7+ con pantalla de 12.4\"."
    },
    5: {
        product: "Monitor LG 27\"",
        date: "2024-11-10",
        status: "En Proceso",
        description: "Monitor de 27\" 4K para productividad y entretenimiento."
    },
    6: {
        product: "Teclado Mecánico",
        date: "2024-11-05",
        status: "Completada",
        description: "Teclado mecánico con retroiluminación RGB y switches Cherry MX."
    },
    7: {
        product: "Impresora Multifunción",
        date: "2024-11-02",
        status: "En Proceso",
        description: "Impresora multifuncional para oficina con escaneo, copiado e impresión en color."
    },
    8: {
        product: "Smartphone Xiaomi",
        date: "2024-10-30",
        status: "Cancelada",
        description: "Smartphone Xiaomi con cámara de alta resolución y gran rendimiento."
    },
    9: {
        product: "Cámara Canon DSLR",
        date: "2024-10-25",
        status: "Completada",
        description: "Cámara Canon DSLR con lente intercambiable, ideal para fotógrafos profesionales."
    },
    10: {
        product: "Router TP-Link",
        date: "2024-10-20",
        status: "En Proceso",
        description: "Router TP-Link con tecnología Wi-Fi 6 para conexiones rápidas y estables."
    }
};


        // Función para cargar detalles de la orden en el modal
        function loadOrderDetails(orderId) {
            const order = orders[orderId];
            document.getElementById('orderProduct').textContent = order.product;
            document.getElementById('orderDate').textContent = order.date;
            document.getElementById('orderStatus').textContent = order.status;
            document.getElementById('orderDescription').textContent = order.description;
        }
    </script>
</body>

</html>