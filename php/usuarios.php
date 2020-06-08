<?php
    require '../conexion/conexion.php';
    $conexion = conexionBD();

    if(isset($_POST['nombres'])){
        // True
        $id_evento = $_POST['id_evento']; // Evento
        // Datos de usuario
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];

        // sql 
     $guardar = $conexion->query("INSERT INTO tbl_usuarios VALUES(0, '".$nombres."','".$apellidos."','".$correo."')");
     if($guardar){
         $idus = mysqli_query($conexion, "SELECT MAX(id_usuario) FROM tbl_usuario");
         $iduser = mysqli_fetch_row($idus);

         $id = $iduser['id_usuario'];
         $date = date('Y-m-d'); // Fecha del sistema 
        
         $detalle_event = $conexion->query("INSERT INTO detalle_eventos value(0, '".$id."','".$id_evento."','".$date."')");
         if($detalle_event){
             header("Location: ../../detalle_eventos/cursos.php");
         }else{
             echo "Error en Detalle evento: ".$conexion->error;
         }
        //  echo "Se guardo";
        //header('Location: ../usuarios/listar_usuarios.php');
     }else{
         echo "Error ".$conexion->error;
     }
    }
?>-