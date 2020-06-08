<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    <h1>Datos personales</h1>
    <form action="../php/usuarios.php" method="post">
        <input type="hidden" name="id_evento" value="<?php echo $_GET['idcurso']?>">
        <!-- nombres, apellidos correo -->
        <label for="">Nombres</label>
        <input type="text" name="nombres" id="nombres" placeholder="Nombres">
        <p>
        <label for="">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellids">
        <p>
        <label for="">Correo</label>
        <input type="email" name="correo" id="correo" placeholder="example@example.com">
        <p>
        <input type="submit" value="Regisrar">
    </form>
</body>
</html>