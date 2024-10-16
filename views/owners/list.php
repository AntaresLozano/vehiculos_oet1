<?php
$pageTitle = 'Lista de Propietarios';
ob_start();
?>

<h1>Lista de Propietarios</h1>
<a href="index.php?action=owners&subaction=add">Agregar Propietario</a>
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
        <?php foreach ($owners as $owner): ?>
        <tr>
            <td><?= htmlspecialchars($owner['cedula']) ?></td>
            <td><?= htmlspecialchars($owner['first_name'] . ' ' . $owner['second_name']) ?></td>
            <td><?= htmlspecialchars($owner['last_name']) ?></td>
            <td><?= htmlspecialchars($owner['address']) ?></td>
            <td><?= htmlspecialchars($owner['phone']) ?></td>
            <td><?= htmlspecialchars($owner['city']) ?></td>
            <td>
                <a href="index.php?action=owners&subaction=edit&id=<?= $owner['id'] ?>">Editar</a>
                <a href="index.php?action=owners&subaction=delete&id=<?= $owner['id'] ?>" onclick="return confirm('¿Está seguro de eliminar este propietario?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include 'views/layout.php';
?>