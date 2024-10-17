<?php
$pageTitle = 'Agregar Vehículo';
ob_start();
?>
<?php if (isset($error)) echo displayError($error); ?>
<div class="add-form">
    <h1>Editar Vehículo</h1>
    <form action="index.php?action=vehicles&subaction=edit&id=<?= $vehicle['id'] ?>" method="post">
        <label for="plate">Placa:</label>
        <input type="text" id="plate" name="plate" value="<?= htmlspecialchars($vehicle['plate']) ?>" required>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" value="<?= htmlspecialchars($vehicle['color']) ?>" required>

        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand" value="<?= htmlspecialchars($vehicle['brand']) ?>" required>

        <label for="type">Tipo:</label>
        <select id="type" name="type" required>
            <option value="particular" <?= $vehicle['type'] == 'particular' ? 'selected' : '' ?>>Particular</option>
            <option value="publico" <?= $vehicle['type'] == 'publico' ? 'selected' : '' ?>>Público</option>
        </select>

        <label for="driver_id">Conductor:</label>
        <select id="driver_id" name="driver_id" required>
            <?php
            $drivers = Driver::getAll();
            foreach ($drivers as $driver) {
                $selected = $driver['id'] == $vehicle['driver_id'] ? 'selected' : '';
                echo "<option value='{$driver['id']}' $selected>{$driver['first_name']} {$driver['last_name']}</option>";
            }
            ?>
        </select>

        <label for="owner_id">Propietario:</label>
        <select id="owner_id" name="owner_id" required>
            <?php
            $owners = Owner::getAll();
            foreach ($owners as $owner) {
                $selected = $owner['id'] == $vehicle['owner_id'] ? 'selected' : '';
                echo "<option value='{$owner['id']}' $selected>{$owner['first_name']} {$owner['last_name']}</option>";
            }
            ?>
        </select>

        <button type="submit">Actualizar Vehículo</button>
    </form>
    <a href="index.php?action=vehicles">Volver a la lista</a>
</div>
<?php
$content = ob_get_clean();
include 'views/layout.php';
?>