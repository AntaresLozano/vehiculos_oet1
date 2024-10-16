<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Vehículos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Informe de Vehículos</h1>
    <table>
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Conductor</th>
                <th>Propietario</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reports as $report): ?>
            <tr>
                <td><?= htmlspecialchars($report['plate']) ?></td>
                <td><?= htmlspecialchars($report['brand']) ?></td>
                <td><?= htmlspecialchars($report['driver_name']) ?></td>
                <td><?= htmlspecialchars($report['owner_name']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php">Volver al inicio</a>
</body>
</html>