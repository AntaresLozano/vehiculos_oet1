<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Sistema de Gestión de Vehículos' ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <span>ACME S.A</span>
        </div>
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
    <script>
    $(document).ready(function() {
        $('table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
            }
        });
    });
</script>

</body>
</html>