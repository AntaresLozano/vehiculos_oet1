<?php
$pageTitle = 'Inicio - Sistema de Gestión de Vehículos';
ob_start();
?>

<h1>Bienvenido al Sistema de Gestión de Vehículos</h1>
<p>Seleccione una opción del menú para comenzar.</p>

<?php
$content = ob_get_clean();
include 'views/layout.php';
?>