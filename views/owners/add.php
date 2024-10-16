<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Propietario</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Agregar Propietario</h1>
    <?php if (isset($error)) echo displayError($error); ?>
    <form action="index.php?action=owners&subaction=add" method="post">
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" required>

        <label for="first_name">Primer Nombre:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="second_name">Segundo Nombre:</label>
        <input type="text" id="second_name" name="second_name">

        <label for="last_name">Apellidos:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" required>

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="city">Ciudad:</label>
        <input type="text" id="city" name="city" required>

        <button type="submit">Agregar Propietario</button>
    </form>
    <a href="index.php?action=owners">Volver a la lista</a>
</body>
</html>