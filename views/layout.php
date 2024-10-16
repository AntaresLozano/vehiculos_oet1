<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Sistema de Gestión de Vehículos' ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?action=vehicles">Vehículos</a></li>
            <li><a href="index.php?action=drivers">Conductores</a></li>
            <li><a href="index.php?action=owners">Propietarios</a></li>
            <li><a href="index.php?action=reports">Informes</a></li>
        </ul>
    </nav>
    <main>
        <?= $content ?>
    </main>
</body>
</html>