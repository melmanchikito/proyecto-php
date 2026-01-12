<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos Enviados</title>
</head>

<body>

    <h1>Datos recibidos del formulario</h1>

    <?php
    // Uso del método POST
    if (isset($_POST['nombre']) && isset($_POST['correo'])) {
        echo "<p><strong>Nombre:</strong> " . $_POST['nombre'] . "</p>";
        echo "<p><strong>Correo:</strong> " . $_POST['correo'] . "</p>";
    } else {
        echo "<p>No se recibieron datos.</p>";
    }
    ?>

    <br>
    <a href="index.php">Volver a la página principal</a>

</body>

</html>