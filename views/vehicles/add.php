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
        <select id="color" name="color" required>
            <option value="" disabled selected>Seleccione un color</option>
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <option value="negro">Negro</option>
            <option value="blanco">Blanco</option>
            <option value="gris">Gris</option>
            <option value="plata">Plata</option>
            <option value="verde">Verde</option>
            <option value="amarillo">Amarillo</option>
        </select>

        <label for="brand">Marca:</label>
        <select id="brand" name="brand" required>
            <option value="" disabled selected>Seleccione una marca</option>
            <option value="Toyota">Toyota</option>
            <option value="Honda">Honda</option>
            <option value="Nissan">Nissan</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Ford">Ford</option>
            <option value="Volkswagen">Volkswagen</option>
            <option value="Hyundai">Hyundai</option>
            <option value="Kia">Kia</option>
            <option value="Mazda">Mazda</option>
            <option value="Renault">Renault</option>
        </select>

        <label for="type">Tipo:</label>
        <select id="type" name="type" required>
            <option value="" disabled selected>Seleccione el tipo de vehiculo</option>
            <option value="particular">Particular</option>
            <option value="publico">Público</option>
        </select>
        
        <label for="driver_id">Conductor:</label>
        <select id="driver_id" name="driver_id" >
            <option value="" disabled selected>Seleccione el conductor (opcional)</option>
            <?php
            $drivers = Driver::getAll();
            if(isset($drivers)) {
                foreach ($drivers as $driver) {
                        echo "<option value='{$driver['id']}'>{$driver['first_name']} {$driver['last_name']}</option>";
                    }
                }
            ?>
        </select>
        
        <label for="owner_id">Propietario:</label>
        <select id="owner_id" name="owner_id" required>
            <option value="" disabled selected>Seleccione propietario (opcional)</option>
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