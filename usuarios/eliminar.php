<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar registro</title>
</head>
<body>
    <h3>¿Esta seguro/a de borrar el registro?</h3>
    <a href="../php/eliminar.php?id=<?php echo $_GET['id']?>">Si, ¡acepto!</a>
    <p></p>
    <a href="listar_usuarios.php">No, quiero!</a>
</body>
</html>