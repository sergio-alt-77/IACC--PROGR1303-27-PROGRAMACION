<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuario</title>
</head>

<body>
    <h2>Sistema estadístico restringido</h2>
    <form action="s3_actividad2_procesos.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>
        <br><br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>

</html>