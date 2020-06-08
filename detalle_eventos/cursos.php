<?php
    include "../conexion/conexion.php";
    $conexion = conexionBD();

    $cursos = mysqli_query($conexion, "SELECT * FROM tbl_eventos ORDER BY fecha_evento DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los cursos</title>
</head>
<body>
    <h1>Todos los eventos</h1>
<?php
    while($item = mysqli_fetch_array($cursos)){
?>
    <div>
        <h3><?php echo $item['nombre_evento'] ?></h3>
        <h5></h5>
        <a href="../usuarios/guardar.php?idcurso=<?php echo $item['id_eventos']?>">Inscribirse</a>
        <hr>
        <p></p>
    </div>
    <?php
        }
    ?>
</body>
</html>