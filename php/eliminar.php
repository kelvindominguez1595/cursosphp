<?php
    require '../conexion/conexion.php';
    $conexion = conexionBD();

    if(isset($_GET['id'])){
            // intrucciones
            $delete = $conexion->query("DELETE FROM tbl_usuarios WHERE id_usuario=".$_GET['id']);
            if($delete){
                header('Location: ../usuarios/listar_usuarios.php');
            }else{
                echo "error ". $conexion->error;
            }
    }else{
        echo "Error";
    }
?>