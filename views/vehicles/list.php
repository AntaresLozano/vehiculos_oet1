<?php
$pageTitle = 'Lista de Vehículos';
ob_start();
?>

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
            <?php $driver = Driver::getById($vehicle["driver_id"]);?>
            <?php $owner = Owner::getById($vehicle["owner_id"]);?>
        <tr>
            <td><?= htmlspecialchars($vehicle['plate']) ?></td>
            <td><?= htmlspecialchars($vehicle['color']) ?></td>
            <td><?= htmlspecialchars($vehicle['brand']) ?></td>
            <td><?= htmlspecialchars($vehicle['type']) ?></td>
            <td><?= htmlspecialchars($driver['first_name'] . ' ' . $driver['last_name']) ?></td>
            <!-- <td></td> -->
            <td><?= htmlspecialchars($owner['first_name'] . ' ' . $owner['last_name']) ?></td>
            <td>
                <a href="index.php?action=vehicles&subaction=edit&id=<?= $vehicle['id'] ?>">Editar</a>
                <a href="index.php?action=vehicles&subaction=delete&id=<?= $vehicle['id'] ?>" onclick="return confirm('¿Está seguro de eliminar este vehículo?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include 'views/layout.php';
?>