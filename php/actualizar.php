<?php
 include '../conexion/conexion.php';
 $conexion = conexionBD();

 if(isset($_POST['id'])){
     // Intrucciones
     $id = $_POST['id'];
     $nombres = $_POST['nombres'];
     $apellidos = $_POST['apellidos'];
     $correo = $_POST['correo'];

     $edit = $conexion->query("UPDATE tbl_usuarios SET nombres = '".$nombres."', apellidos = '".$apellidos."', correo = '".$correo."' WHERE id_usuario=".$id);
     if($edit){
         Header('Location: ../usuarios/listar_usuarios.php');
     }else{
         echo "Error al actualizar ".$conexion->error;
     }
 }
?>