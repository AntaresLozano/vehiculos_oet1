<?php
$pageTitle = 'Lista de Conductores';
ob_start();
?>

<h1>Lista de Conductores</h1>
<a class="add" href="index.php?action=drivers&subaction=add">Agregar Conductor</a>
<table>
    <thead>
        <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($drivers as $driver): ?>
        <tr>
            <td><?= htmlspecialchars($driver['cedula']) ?></td>
            <td><?= htmlspecialchars($driver['first_name'] . ' ' . $driver['second_name']) ?></td>
            <td><?= htmlspecialchars($driver['last_name']) ?></td>
            <td><?= htmlspecialchars($driver['address']) ?></td>
            <td><?= htmlspecialchars($driver['phone']) ?></td>
            <td><?= htmlspecialchars($driver['city']) ?></td>
            <td>
                <a href="index.php?action=drivers&subaction=edit&id=<?= $driver['id'] ?>">Editar</a>
                <a href="index.php?action=drivers&subaction=delete&id=<?= $driver['id'] ?>" onclick="return confirm('¿Está seguro de eliminar este conductor?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include 'views/layout.php';
?>