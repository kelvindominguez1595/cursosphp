<?php
include "../../conexion/conexion.php";
$conexion = conexionBD();
if(isset($_POST['id'])){
    $nombre_evento = $_POST['nombre_evento'];
    $descripcion = $_POST['descripcion'];
    $fecha_evento = $_POST['fecha_evento'];
    $hora_evento = $_POST['hora_evento'];

    $update = $conexion->query("UPDATE tbl_eventos SET nombre_evento = '".$nombre_evento."', descripcion = '".$descripcion."', fecha_evento = '".$fecha_evento."', hora_evento = '".$hora_evento."' WHERE id_eventos=".$_POST['id']);
    if($update){
        header("Location: ../../eventos/listar.php");
    }else{
        echo "Error: ".$conexion->error;
    }
}
?>