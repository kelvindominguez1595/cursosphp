<?php
    include "../conexion/conexion.php";
    $conexion = conexionBD();

    $cursos = mysqli_query($conexion, "SELECT * FROM tbl_eventos ORDER BY fecha_evento DESC");
    $nombres = "";
    $apellido = "";
    $idusuario = "";
    $uselogueo = 0;
    if(isset($_GET['usuariologueado'])){
        $uselogueo = $_GET['usuariologueado'];
        $usuario = mysqli_query($conexion, "SELECT * FROM tbl_usuarios WHERE id_usuario=".$uselogueo);
        $datos = mysqli_fetch_assoc($usuario);
        $nombres = $datos['nombres'];
        $apellido = $datos['apellidos'];
        $idusuario = $datos['id_usuario'];
    }else{
        $nombres = "";
        $apellido = "";
        $idusuario = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los cursos</title>
</head>
<body>
<h4>Bienvenido <?php echo $nombres." ".$apellido;  ?></h4>  
<?php if($uselogueo == 0) {?>
    <a href="login.php">Iniciar Sesión</a>
<?php } else{ ?>
    <a href="cursos.php">Cerrar Sesión</a>
<?php }?>

    <h1>Todos los eventos</h1>
<?php
    while($item = mysqli_fetch_array($cursos)){
?>
    <div>
        <h3><?php echo $item['nombre_evento'] ?></h3>
        <h5></h5>
        <a href="../usuarios/guardar.php?idcurso=<?php echo $item['id_eventos']?>&userlogueado=<?php echo $idusuario;  ?>">
    <img width="100px" src="../image/<?php echo $item['imagen'] ?>" alt="">
    </a>
        <hr>
        <p></p>
    </div>
    <?php
        }
    ?>
</body>
</html>