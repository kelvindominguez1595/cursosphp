<?php
function conexionBD(){
        // Datos server
        $server = "localhost";
        $nombreBD = "evento";
        $usuario = "root";
        $pass = '';

        // Conexion a Mysql
        $conexion = new mysqli($server, $usuario, $pass, $nombreBD);
        if($conexion->connect_error){
            die("Error de conexión ".$conexion->connect_errno." ".$conexion->connect_error);
        }else{
            return $conexion;
            // echo "Conexion fue un exito!";
        }
       // conexion->mysqli_close();
    }

?>