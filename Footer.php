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
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMGS_UNID') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMGS_UP') !== false) {
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
} elseif (strpos($_SERVER['REQUEST_URI'], 'Vista_UP') !== false) {
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
} elseif (strpos($_SERVER['REQUEST_URI'], 'ISIMA') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'ILI') !== false) {
    $base_path = '../';
}
?>

<section id="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h4>Contacto</h4>
            <p><strong>Dirección:</strong> Av. Adolfo López Mateos Ote. 1801, Bona Gens, 20256 Aguascalientes, Ags.</p>
            <p><strong>Teléfono:</strong> 449 960 9129</p>
            <p><strong>Horario de Atención:</strong> 9:00 - 20:00, Lunes - Domingo</p>
        </div>
        <div class="footer-column">
            <h4>Enlaces</h4>
            <ul>
                <li><a href="<?php echo $base_path; ?>index.php">Inicio</a></li>
                <li><a href="<?php echo $base_path; ?>Formularios/Test.php" title="Test Vocacional">Test Vocacional</a></li>
                <li><a href="<?php echo $base_path; ?>Cursos/Cursos.php" title="Cursos">Cursos</a></li>
                <li><a href="<?php echo $base_path; ?>Rec_Catalogo/Catalogo.php" title="Universidades">Universidades</a></li>
                <li><a href="<?php echo $base_path; ?>Carreras/Carreras.php" title="Carreras">Carreras</a></li>
                <li><a href="<?php echo $base_path; ?>Donaciones/Donaciones.php" title="Donaciones">Donaciones</a></li>
                <li><a href="<?php echo $base_path; ?>Registro/registro.php" title="Registro">Registro</a></li>
                <li><a href="<?php echo $base_path; ?>Contacto/contacto.php" title="Contacto">Contacto</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Síguenos</h4>
            <ul class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=61558332730310&mibextid=ZbWKwL" target="_blank"  class="fab fa-facebook-f"></a>
                <a href="https://www.instagram.com/universitymatch_mx?igsh=bjg1YjJydGoxbnQ1" target="_blank"  class="fab fa-instagram"></a>
            </ul>
        </div>
    </div>
</section>