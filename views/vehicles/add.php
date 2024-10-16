<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Vehículo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Agregar Vehículo</h1>
    <?php if (isset($error)) echo displayError($error); ?>
    <form action="index.php?action=vehicles&subaction=add" method="post">
        <label for="plate">Placa:</label>
        <input type="text" id="plate" name="plate" required>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>

        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand" required>

        <label for="type">Tipo:</label>
        <select id="type" name="type" required>
            <option value="particular">Particular</option>
            <option value="publico">Público</option>
        </select>

        <label for="driver_id">Conductor:</label>
        <select id="driver_id" name="driver_id" required>
            <?php
            $drivers = Driver::getAll();
            foreach ($drivers as $driver) {
                echo "<option value='{$driver['id']}'>{$driver['first_name']} {$driver['last_name']}</option>";
            }
            ?>
        </select>

        <label for="owner_id">Propietario:</label>
        <select id="owner_id" name="owner_id" required>
            <?php
            $owners = Owner::getAll();
            foreach ($owners as $owner) {
                echo "<option value='{$owner['id']}'>{$owner['first_name']} {$owner['last_name']}</option>";
            }
            ?>
        </select>

        <button type="submit">Agregar Vehículo</button>
    </form>
    <a href="index.php?action=vehicles">Volver a la lista</a>
</body>
</html>