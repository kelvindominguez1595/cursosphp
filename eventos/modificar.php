<?php
 include '../conexion/conexion.php';
 $conexion = conexionBD();

 if(isset($_GET['id'])){
     $datos = mysqli_query($conexion, "SELECT * FROM tbl_eventos WHERE id_eventos=".$_GET['id']);
     $item = mysqli_fetch_assoc($datos);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar eventos</title>
</head>
<body>
    <h1>Guardar eventos</h1>
    <form action="../php/eventos/modificar.php" method="POST">
        <label for="">Nombre de evento</label><br>
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="text" name="nombre_evento" value="<?php echo  $item['nombre_evento']; ?>">
        <p></p>
        <label for="">Descripción</label><br>
            <textarea name="descripcion" id="" cols="30" rows="10">
               <?php echo  $item['descripcion']; ?>
            </textarea>
        <p></p>
        <label for="">Fecha</label><br>
        <input type="date" name="fecha_evento" value="<?php echo  $item['fecha_evento']; ?>">
        <p></p>
        <label for="">Hora</label><br>
        <input type="time" name="hora_evento" value="<?php echo  $item['hora_evento']; ?>">
        <p></p>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>