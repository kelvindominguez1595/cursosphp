<?php
    require '../conexion/conexion.php';
    $conexion = conexionBD();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
</head>
<body>
    <h1>Listar el usuario</h1>
    <p>
        <a href="guardar.php">Registrar un usuario</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                $listarUsuarios = mysqli_query($conexion, "SELECT * FROM tbl_usuarios");
                $contador = 1;
                while($items = mysqli_fetch_array($listarUsuarios)){ 
            ?>
                <tr>
                    <td><?php echo $contador ?> </td>
                    <td><?php echo $items['nombres'] ?></td>
                    <td><?php echo $items['apellidos'] ?></td>
                    <td><?php echo $items['correo'] ?></td>
                    <td>
                        <a href="actualizar.php?id=<?php echo $items['id_usuario'] ?>">Actualizar</a>
                        <a href="eliminar.php?id=<?php echo $items['id_usuario'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php 
                $contador++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>