<?php
$base_path = '';
if (strpos($_SERVER['REQUEST_URI'], 'Formularios') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Rec_Catalogo') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Carreras') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Donaciones') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'HacerDonacion') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'BuscarFormulario') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'BuscarDonacion') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'AplicarITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMGS_ITA') !== false) { 
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Info_ITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'MatriculaITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'PlanITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Vista_ITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Vista_UNID') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Info_UNID') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'MatriculaUNID') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'PlanUNID') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'AplicarUNID') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMGS_UNID') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Vista_UP') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Info_UP') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'MatriculaUP') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'PlanUP') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'AplicarUP') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMGS_UP') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IELECTRI') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IELECTRO') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IG') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'II') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMATE') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMECA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IQ') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IS') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'ITICS') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'LA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Registro') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Cursos') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Contacto') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Carrito') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Favoritos') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Conocenos') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Perfil') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'ILI') !== false) {
    $base_path = '../';
} if (strpos($_SERVER['REQUEST_URI'], 'ISIMA1') !== false) {
    $base_path = '../';
}  elseif (strpos($_SERVER['REQUEST_URI'], 'Ordenes') !== false) {
    $base_path = '../';
}

// Función para activar clases en el menú
function setActiveClass($page) {
    return (strpos($_SERVER['REQUEST_URI'], $page) !== false) ? 'class="active"' : '';
}

?>
<!-------------------------------------------------------------------------------------------------------------------------------------- -->

<section id="header"> 
    <a href="<?php echo $base_path; ?>index.php">
        <img src="<?php echo $base_path; ?>img/Logo2.jpg" class="sin-borde imgResponsive" alt="logo" title="Logo" width="250">
    </a>

    <!-- Menú hamburguesa -->
    <div class="burger-menu" id="burger-menu">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <ul id="navbar">
        <li><a href="<?php echo $base_path; ?>index.php" title="Inicio" <?php echo setActiveClass('index.php'); ?>>Inicio</a></li>
        <li><a href="<?php echo $base_path; ?>Formularios/Test.php" title="Test Vocacional" <?php echo setActiveClass('Test.php'); ?>>Test Vocacional</a></li>
        <li><a href="<?php echo $base_path; ?>Cursos/Cursos.php" title="Cursos" <?php echo setActiveClass('Cursos.php'); ?>>Cursos</a></li>
        <li><a href="<?php echo $base_path; ?>Rec_Catalogo/Catalogo.php" title="Universidades" <?php echo setActiveClass('Catalogo.php'); ?>>Universidades</a></li>
        <li><a href="<?php echo $base_path; ?>Carreras/Carreras.php" title="Carreras" <?php echo setActiveClass('Carreras.php'); ?>>Carreras</a></li>
        <li><a href="<?php echo $base_path; ?>Donaciones/Donaciones.php" title="Donaciones" <?php echo setActiveClass('Donaciones.php'); ?>>Donaciones</a></li>

        <!-- Menú desplegable Mi Cuenta -->
        <li class="custom-dropdown">
            <a href="#" class="custom-dropdown-toggle">
                <img src="<?php echo $base_path; ?>Perfil/assets/img/profile-img.jpg" alt="Perfil" class="custom-profile-img">
                <span>K. Anderson</span>
                <span class="custom-dropdown-arrow">&#9660;</span>
            </a>
            <ul class="custom-dropdown-menu">
                <li class="custom-dropdown-header"><span>Estudiante</span></li>
                <li><a href="<?php echo $base_path; ?>Perfil/Perfil.php" class="custom-dropdown-item"><span class="icon user-icon"></span> Perfil</a></li>
                <li><a href="<?php echo $base_path; ?>Registro/registro.php" class="custom-dropdown-item"><span class="icon pencil-icon"></span> Registro</a></li>
                <li><a href="<?php echo $base_path; ?>Contacto/contacto.php" class="custom-dropdown-item"><span class="icon mail-icon"></span> Contacto</a></li>
                <li><a href="<?php echo $base_path; ?>Conocenos/Conocenos.php" class="custom-dropdown-item"><span class="icon community-icon"></span> Conócenos</a></li>
                <li><a href="<?php echo $base_path; ?>Ordenes/Ordenes.php" class="custom-dropdown-item"><span class="icon orders-icon"></span> Órdenes de Donaciones</a></li>
                <li><hr class="custom-dropdown-divider"></li>
                <li><a href="#" class="custom-dropdown-item"><span class="icon logout-icon"></span> Cerrar sesión</a></li>
            </ul>
        </li>
    </ul>
</section>

<!-- CSS para el menú desplegable -->
<style>
    .custom-navbar {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .custom-dropdown-header {
        display: flex;
        justify-content: center; 
        align-items: center;
        width: 100%;
        padding: 10px 0;
        color: #333; 
    }

    .custom-logo {
        width: 200px;
    }

    .custom-dropdown {
        position: relative;
        margin-left: 20px;
        
    }

    .custom-dropdown-toggle {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333;
        cursor: pointer;
    }

    .custom-profile-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .custom-dropdown-arrow {
        margin-left: 5px;
        font-size: 1rem;
    }

    .custom-dropdown-menu {
    display: none;
    position: absolute; 
    top: 100%; 
    left: 0;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 10px;
    border-radius: 5px;
    z-index: 1000;
    list-style: none;
    min-width: 200px;
}

    .custom-dropdown-menu.show {
        display: block;
    }

    .custom-dropdown-item {
        display: flex; 
        align-items: center;
        text-decoration: none;
        color: #333;
        padding: 8px 15px; 
    }

    .custom-dropdown-item:hover {
        background-color: #f8f9fa; 
    }

    .custom-dropdown-divider {
        border: 0;
        height: 1.5px;
        background-color: #333; 
        margin: 3px 0;
    }

    .icon {
        display: inline-block;
        width: 20px; 
        height: 20px; 
        margin-right: 5px; 
        background-color: #000; 
        mask-size: contain;  
        -webkit-mask-size: contain;
        mask-repeat: no-repeat;
        -webkit-mask-repeat: no-repeat;
        mask-position: center;
        -webkit-mask-position: center;
    }

    .user-icon {
        mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12c2.211 0 4-1.789 4-4S14.211 4 12 4 8 5.789 8 8s1.789 4 4 4zM12 14c-3.314 0-6 2.686-6 6h12c0-3.314-2.686-6-6-6z"/></svg>');
        -webkit-mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12c2.211 0 4-1.789 4-4S14.211 4 12 4 8 5.789 8 8s1.789 4 4 4zM12 14c-3.314 0-6 2.686-6 6h12c0-3.314-2.686-6-6-6z"/></svg>');
    }

    .community-icon {
        mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"/><path d="M9 11a4 4 0 0 0-4 4v2h8v-2a4 4 0 0 0-4-4z"/><circle cx="17" cy="7" r="4"/><path d="M17 11a4 4 0 0 0-4 4v2h8v-2a4 4 0 0 0-4-4z"/></svg>');
        -webkit-mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"/><path d="M9 11a4 4 0 0 0-4 4v2h8v-2a4 4 0 0 0-4-4z"/><circle cx="17" cy="7" r="4"/><path d="M17 11a4 4 0 0 0-4 4v2h8v-2a4 4 0 0 0-4-4z"/></svg>');
    }


    .pencil-icon {
        mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5l4 4-11 11H5v-4L16.5 3.5z"/></svg>');
        -webkit-mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5l4 4-11 11H5v-4L16.5 3.5z"/></svg>');
    }

    .logout-icon {
        mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5"/><path d="M16 17l5-5-5-5M21 12H9"/></svg>');
        -webkit-mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5"/><path d="M16 17l5-5-5-5M21 12H9"/></svg>');
    }

    .mail-icon {
        mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z"></path><path d="M22 4L12 14 2 4"></path></svg>');
        -webkit-mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z"></path><path d="M22 4L12 14 2 4"></path></svg>');
    }

    .orders-icon {
    mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2z"/><path d="M3 8l9 6 9-6"/><path d="M12 13l-3-3m6 0l-3 3"/></svg>');
    -webkit-mask-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2z"/><path d="M3 8l9 6 9-6"/><path d="M12 13l-3-3m6 0l-3 3"/></svg>');
    mask-size: cover;
    -webkit-mask-size: cover;
    background-color: black;
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
}


</style>

<!-- JavaScript para controlar el menú desplegable -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownToggle = document.querySelector('.custom-dropdown-toggle');
        const dropdownMenu = document.querySelector('.custom-dropdown-menu');

        dropdownToggle.addEventListener('click', function (e) {
            e.preventDefault();
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function (e) {
            if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.getElementById('burger-menu');
    const navbar = document.getElementById('navbar');

    burgerMenu.addEventListener('click', function () {
        navbar.classList.toggle('show');
    });
});

</script>