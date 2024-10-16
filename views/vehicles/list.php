<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vehículos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Lista de Vehículos</h1>
    <a href="index.php?action=vehicles&subaction=add">Agregar Vehículo</a>
    <table>
        <thead>
            <tr>
                <th>Placa</th>
                <th>Color</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Conductor</th>
                <th>Propietario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehicles as $vehicle): ?>
            <tr>
                <td><?= htmlspecialchars($vehicle['plate']) ?></td>
                <td><?= htmlspecialchars($vehicle['color']) ?></td>
                <td><?= htmlspecialchars($vehicle['brand']) ?></td>
                <td><?= htmlspecialchars($vehicle['type']) ?></td>
                <td><?= htmlspecialchars($vehicle['driver_first_name'] . ' ' . $vehicle['driver_last_name']) ?></td>
                <td><?= htmlspecialchars($vehicle['owner_first_name'] . ' ' . $vehicle['owner_last_name']) ?></td>
                <td>
                    <a href="index.php?action=vehicles&subaction=edit&id=<?= $vehicle['id'] ?>">Editar</a>
                    <a href="index.php?action=vehicles&subaction=delete&id=<?= $vehicle['id'] ?>" onclick="return confirm('¿Está seguro de eliminar este vehículo?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>