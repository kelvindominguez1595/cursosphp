<?php
    require '../conexion/conexion.php';
    $conexion = conexionBD();

    if(isset($_POST['nombres']) or isset($_POST['id_usuario'])){
        // True
        $id_evento = $_POST['id_evento']; // Evento
        // Datos de usuario
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        $id_usuario = $_POST['id_usuario'];
        if($id_usuario == 0){ 
            $guardar = $conexion->query("INSERT INTO tbl_usuarios VALUES(0, '".$nombres."','".$apellidos."','".$correo."', '".$pass."')");
            if($guardar){  
                $iduser = $conexion->insert_id;  // Extraer el id del ultimo registro al insert tbl_usuarios 
                $date = date('Y-m-d'); // Fecha del sistema         
                $detalle_event = $conexion->query("INSERT INTO detalle_eventos value(0, '".$iduser."','".$id_evento."','".$date."')");
                    if($detalle_event){
                        header("Location: ../detalle_eventos/cursos.php?usuariologueado=".$iduser);
                    }else{
                        echo "Error en Detalle evento: ".$conexion->error;
                    }            
            }else{
                echo "Error ".$conexion->error;
            }
        }else{
            $date = date('Y-m-d'); // Fecha del sistema         
            $detalle_event = $conexion->query("INSERT INTO detalle_eventos value(0, '".$id_usuario."','".$id_evento."','".$date."')");
                if($detalle_event){
                    header("Location: ../detalle_eventos/cursos.php?usuariologueado=".$id_usuario);
                }else{
                    echo "Error en Detalle evento: ".$conexion->error;
                }            
        }
    }
?>