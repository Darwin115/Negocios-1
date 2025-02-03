<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || UNID-GALERÍA</title>

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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-GDWlJng9xEwG1eYTTvWe4H9fA1Idb51fbrYw5YK51m6JzCj5lCR4gI6Rbmu1nCrXOjW1QrR7TjDXXESmtv5D5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Favicons -->
  <link href="../../img/Logo3.png" rel="icon">

  <style>
    /* Estilo para la galería */
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 15px;
        padding: 0 15px;
    }
    .gallery img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
    }
    .gallery img:hover {
        transform: scale(1.05);
    }

    /* Estilo para el modal */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }
    .modal img {
        max-width: 90%;
        max-height: 90%;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }
    .modal .close {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 30px;
        color: white;
        cursor: pointer;
    }
  </style>
</head>
<body>

  <?php include '../../Header.php'; ?>
  <?php include 'HeaderUNID.php'; ?>

  <section id="aulas">
    <h2>Edificios</h2>
    <br>
    <div class="gallery">
        <img src="../../img/uniPics/UNID/Galeria/Ext1.png" alt="Edificio 1">
        <img src="../../img/uniPics/UNID/Galeria/Ext3.jpg" alt="Edificio 2">
        <img src="../../img/uniPics/UNID/Galeria/Ext4.jpeg" alt="Edificio 3">
        <img src="../../img/uniPics/UNID/Galeria/Ext6.jpg" alt="Edificio 4">
        <img src="../../img/uniPics/UNID/Galeria/Ext5.jpg" alt="Edificio 5">
        <img src="../../img/uniPics/UNID/Galeria/Ext2.jpg" alt="Edificio 6">
    </div>
  </section>

  <br>

  <!-- Modal -->
  <div class="modal" id="imageModal">
    <span class="close" id="closeModal">&times;</span>
    <img id="modalImage" src="" alt="Imagen ampliada">
  </div>

  <script>
    // Seleccionar elementos
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    const closeModal = document.getElementById("closeModal");
    const galleryImages = document.querySelectorAll(".gallery img");

    // Abrir modal al hacer clic en una imagen
    galleryImages.forEach(img => {
      img.addEventListener("click", () => {
        modal.style.display = "flex";
        modalImage.src = img.src;
        modalImage.alt = img.alt;
      });
    });

    // Cerrar modal
    closeModal.addEventListener("click", () => {
      modal.style.display = "none";
    });

    // Cerrar modal al hacer clic fuera de la imagen
    modal.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.style.display = "none";
      }
    });
  </script>
</body>
<?php include '../../Footer.php'; ?>
</html>
