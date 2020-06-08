<?php
require "../../conexion/conexion.php";
$conexion = conexionBD();

if(isset($_POST['nombre_evento'])){
    //intrucciones
    $nombre_evento = $_POST['nombre_evento']; 
    $descripcion = $_POST['descripcion']; 
    $fecha_evento = $_POST['fecha_evento']; 
    $hora_evento = $_POST['hora_evento']; 

    $save = $conexion->query("INSERT INTO tbl_eventos value(0,'".$nombre_evento."', '".$descripcion."', '".$fecha_evento."', '".$hora_evento."')");

    if($save){
        header("Location: ../../eventos/listar.php");
    }
}else{
    echo "error: ".$conexion->error;
}
?>