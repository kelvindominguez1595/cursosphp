<?php
    require '../conexion/conexion.php';
    $conexion = conexionBD();
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $datosObtenids = mysqli_query($conexion, "SELECT * FROM tbl_usuarios WHERE id_usuario =".$id);
        $items = mysqli_fetch_assoc($datosObtenids);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar registro</h1>
    <form action="../php/actualizar.php" method="post">
        <!-- nombres, apellidos correo -->
        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>">
        <label for="">Nombres</label>
        <input type="text" name="nombres" id="nombres" placeholder="Nombres" value="<?php echo $items['nombres']?>">
        <p>
        <label for="">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellids" value="<?php echo $items['apellidos']?>">
        <p>
        <label for="">Correo</label>
        <input type="email" name="correo" id="correo" placeholder="example@example.com" value="<?php echo $items['correo']?>">
        <p>
        <input type="submit" value="Editar">
    </form>
</body>
</html>