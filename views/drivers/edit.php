<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Conductor</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Editar Conductor</h1>
    <?php if (isset($error)) echo displayError($error); ?>
    <form action="index.php?action=drivers&subaction=edit&id=<?= $driver['id'] ?>" method="post">
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" value="<?= htmlspecialchars($driver['cedula']) ?>" required>

        <label for="first_name">Primer Nombre:</label>
        <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($driver['first_name']) ?>" required>

        <label for="second_name">Segundo Nombre:</label>
        <input type="text" id="second_name" name="second_name" value="<?= htmlspecialchars($driver['second_name']) ?>">

        <label for="last_name">Apellidos:</label>
        <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($driver['last_name']) ?>" required>

        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" value="<?= htmlspecialchars($driver['address']) ?>" required>

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($driver['phone']) ?>" required>

        <label for="city">Ciudad:</label>
        <input type="text" id="city" name="city" value="<?= htmlspecialchars($driver['city']) ?>" required>

        <button type="submit">Actualizar Conductor</button>
    </form>
    <a href="index.php?action=drivers">Volver a la lista</a>
</body>
</html>