<?php
    include "../../conexion/conexion.php";
    $conexion = conexionBD();

    if(isset($_POST['correo']) and isset($_POST['pass'])){
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];
        $datos = mysqli_query($conexion, "SELECT * FROM tbl_usuarios WHERE correo ='".$correo."' AND pass = '".$pass."'");
        $iduser = mysqli_fetch_assoc($datos);      
        //echo $iduser['id_usuario'];
        if(isset($iduser['id_usuario'])){
            header("Location: ../../detalle_eventos/cursos.php?usuariologueado=".$iduser['id_usuario']);
        }else{
            header("Location: ../../detalle_eventos/cursos.php");
        }
    }
?>