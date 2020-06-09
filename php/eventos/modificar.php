<?php
include "../../conexion/conexion.php";
$conexion = conexionBD();
if(isset($_POST['id'])){
    $nombre_evento = $_POST['nombre_evento'];
    $descripcion = $_POST['descripcion'];
    $fecha_evento = $_POST['fecha_evento'];
    $hora_evento = $_POST['hora_evento'];

        // Capturar valores de la imagen
        $nom_img = $_FILES['imagen']['name'];
        $tipo_img = $_FILES['imagen']['type'];
        $tmp_img = $_FILES['imagen']['tmp_name'];
    
        $res = explode(".", $nom_img);
        echo $extension = $res[count($res)-1];
        $nombre = date('s').rand(1, 99).".".$extension;// Renombrar 
        $destino = "../../image/".$nombre;
    
        copy($_FILES['imagen']['tmp_name'], $destino);

    $update = $conexion->query("UPDATE tbl_eventos SET nombre_evento = '".$nombre_evento."', descripcion = '".$descripcion."', fecha_evento = '".$fecha_evento."', hora_evento = '".$hora_evento."', imagen = '".$nombre."' WHERE id_eventos=".$_POST['id']);
    if($update){
        header("Location: ../../eventos/listar.php");
    }else{
        echo "Error: ".$conexion->error;
    }
}
?>