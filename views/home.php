<?php
$pageTitle = 'Inicio - Sistema de Gestión de Vehículos';
ob_start();
?>

<h1>Bienvenido al Sistema de Gestión de Vehículos <b>grupo OET</b></h1>
<p>Aquí podrás <b>administrar</b> fácilmente la información de vehículos, conductores y propietarios. <br> Utiliza el menú de navegación para acceder a las diferentes funciones del sistema.</p>

<?php
$content = ob_get_clean();
include 'views/layout.php';
?>