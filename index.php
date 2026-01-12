<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Proyecto PHP - GET y POST</title>
</head>

<body>

    <h1>Página Principal</h1>

    <!-- Menú de navegación -->
    <nav>
        <a href="index.php?seccion=Inicio">Inicio</a> |
        <a href="index.php?seccion=Unidades">Unidades</a> |
        <a href="index.php?seccion=Contacto">Contacto</a>
    </nav>

    <hr>

    <?php
    // Uso del método GET
    if (isset($_GET['seccion'])) {
        echo "<h2>Sección seleccionada:</h2>";
        echo "<p>" . $_GET['seccion'] . "</p>";
    } else {
        echo "<p>Seleccione una sección del menú.</p>";
    }
    ?>

    <hr>

    <h2>Formulario de Contacto</h2>

    <!-- Formulario POST -->
    <form action="contacto.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br><br>

        <label>Correo electrónico:</label><br>
        <input type="email" name="correo"><br><br>

        <button type="submit">Enviar</button>
    </form>

</body>

</html>