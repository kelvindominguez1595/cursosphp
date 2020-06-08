<?php
include '../../conexion/conexion.php';
$conexion = conexionBD();

if(isset($_GET['id'])){

    $delete = $conexion->query("DELETE FROM tbl_eventos WHERE id_eventos=".$_GET['id']);
    if($delete){
        header("Location: ../../eventos/listar.php");
    }else{
        echo "Error: ".$conexion->error;
    }
}

?>