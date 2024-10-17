<?php
$pageTitle = 'Agregar Vehículo';
ob_start();
?>

<body>
    <?php if (isset($error)) echo displayError($error); ?>
    <div class="add-form">
        <h1>Editar Propietario</h1>
        <form action="index.php?action=owners&subaction=edit&id=<?= $owner['id'] ?>" method="post">
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" value="<?= htmlspecialchars($owner['cedula']) ?>" required>

            <label for="first_name">Primer Nombre:</label>
            <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($owner['first_name']) ?>" required>

            <label for="second_name">Segundo Nombre:</label>
            <input type="text" id="second_name" name="second_name" value="<?= htmlspecialchars($owner['second_name']) ?>">

            <label for="last_name">Apellidos:</label>
            <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($owner['last_name']) ?>" required>

            <label for="address">Dirección:</label>
            <input type="text" id="address" name="address" value="<?= htmlspecialchars($owner['address']) ?>" required>

            <label for="phone">Teléfono:</label>
            <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($owner['phone']) ?>" required>

            <label for="city">Ciudad:</label>
            <input type="text" id="city" name="city" value="<?= htmlspecialchars($owner['city']) ?>" required>

            <button type="submit">Actualizar Propietario</button>
        </form>
        <a href="index.php?action=owners">Volver a la lista</a>
    </div>
    <?php
    $content = ob_get_clean();
    include 'views/layout.php';
    ?>