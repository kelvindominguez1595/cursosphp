<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="../php/detalle_eventos/login.php" method="post">
        <label for="">Correo</label>
        <input type="text" name="correo" id="">
        <p></p>
        <label for="">Contraseña</label>
        <input type="password" name="pass" id=""><p>
        <input type="submit" value="Iniciar sesión"> <br>
        <a href="cursos.php">Regresar</a>
    </form>
</body>
</html>