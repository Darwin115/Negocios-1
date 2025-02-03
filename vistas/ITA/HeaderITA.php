<?php
$base_path = '';
if (strpos($_SERVER['REQUEST_URI'], 'ITICS') !== false) {
    $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IG') !== false) {
    $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IELECTRI') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IELECTRO') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'II') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMATE') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMECA') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IQ') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IS') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'LA') !== false) {
  $base_path = '../vistas/ITA/';
} 
?>

<section id="header2">
  <ul id="navbar2">
    <li><a href="<?php echo $base_path; ?>Vista_ITA.php" title="ITA">ITA</a></li>
    <li><a href="<?php echo $base_path; ?>Info_ITA.php" title="Información General">Información General</a></li>
    <li><a href="<?php echo $base_path; ?>PlanITA.php" title="Plan de Estudios">Plan de Estudios</a></li>
    <li><a href="<?php echo $base_path; ?>MatriculaITA.php" title="Matrícula">Matrícula</a></li>
    <li><a href="<?php echo $base_path; ?>IMGS_ITA.php" class="active" title="Galería de Imágenes">Galería de Imágenes</a></li>
    <li><a href="<?php echo $base_path; ?>AplicarITA.php"class="active" title="¡Aplica ahora!">¡Aplica ahora!</a></li>
    <li><a href="https://ceneval.edu.mx/examenes-ingreso-exani_ii/" target="_blank" title="EXANII-II">EXANII-II</a></li>
    <li><a href="https://aguascalientes.tecnm.mx/" target="_blank" class="btn-ir-pagina" title="Ir a la Página">Ir a la Página</a></li>
  </ul>
</section>