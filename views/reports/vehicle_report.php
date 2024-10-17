<?php
$pageTitle = 'Informe de Vehículos';
ob_start();
?>

<h1>Informe de Vehículos</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Conductor</th>
            <th>Propietario</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reports as $key => $report): ?>
        <tr>
            <td><?= htmlspecialchars($key + 1 ) ?></td>
            <td><?= htmlspecialchars($report['plate']) ?></td>
            <td><?= htmlspecialchars($report['brand']) ?></td>
            <td><?= htmlspecialchars($report['driver_name']) ?></td>
            <td><?= htmlspecialchars($report['owner_name']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include 'views/layout.php';
?>