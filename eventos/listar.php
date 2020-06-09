<?php
 include "../conexion/conexion.php";
 $conexion = conexionBD();

 $list_events = mysqli_query($conexion, "SELECT * FROM tbl_eventos");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de eventos</title>
</head>
<body>
    <h1>Eventos</h1><br>
    <a href="guardar.php">Nuevo evento</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Evento</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($item = mysqli_fetch_array($list_events)){
            ?>
            <tr>
                <td> <?php echo $item['id_eventos'];?> </td>
                <td> <img width="100px" src="../image/<?php echo $item['imagen'];?>" alt=""> </td>
                <td> <?php echo $item['nombre_evento'];?> </td>
                <td> <?php echo $item['descripcion'];?> </td>
                <td> <?php echo $item['fecha_evento'];?> </td>
                <td> <?php echo $item['hora_evento'];?> </td>
                <td>
                    <a href="modificar.php?id=<?php echo $item['id_eventos']?>">Actualizar</a>
                    <a href="eliminar.php?id=<?php echo $item['id_eventos']?>">Eliminar</a>
                </td>
           
            </tr>
            <?php
                        }
            ?>
        </tbody>
    </table>
</body>
</html>