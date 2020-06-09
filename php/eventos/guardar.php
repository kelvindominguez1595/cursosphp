<?php
require "../../conexion/conexion.php";
$conexion = conexionBD();

if(isset($_POST['nombre_evento'])){
    //intrucciones
    $nombre_evento = $_POST['nombre_evento']; 
    $descripcion = $_POST['descripcion']; 
    $fecha_evento = $_POST['fecha_evento']; 
    $hora_evento = $_POST['hora_evento']; 
    // Capturar valores de la imagen
    $nom_img = $_FILES['imagen']['name'];
    $tipo_img = $_FILES['imagen']['type'];
    $tmp_img = $_FILES['imagen']['tmp_name'];

    $res = explode(".", $nom_img);
     $extension = $res[count($res)-1];
    $nombre = date('s').rand(1, 99).".".$extension;// Renombrar 
    $destino = "../../image/".$nombre;

    copy($_FILES['imagen']['tmp_name'], $destino);

    $save = $conexion->query("INSERT INTO tbl_eventos value(0,'".$nombre_evento."', '".$descripcion."', '".$fecha_evento."', '".$hora_evento."', '".$nombre."')");

    if($save){
        header("Location: ../../eventos/listar.php");
    }
}else{
    echo "error: ".$conexion->error;
}
?>