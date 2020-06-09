<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    <?php
        if($_GET['userlogueado'] == 0){
    ?>
        <h1>Datos personales</h1>
        <form action="../php/usuarios.php" method="post">
        <input type="hidden" name="id_usuario" value="0">
            <input type="hidden" name="id_evento" value="<?php echo $_GET['idcurso']?>">
            <!-- nombres, apellidos correo -->
            <label for="">Nombres</label>
            <input type="text" name="nombres" id="nombres" placeholder="Nombres">
            <p>
            <label for="">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellids">
            <p>
            <label for="">Correo</label>
            <input type="email" name="correo" id="correo" placeholder="example@example.com">
            <p>
            <label for="">Contraseña</label>
            <input type="password" name="pass" id="pass" placeholder="*********">
            <p>
            <input type="submit" value="Registrar">
            <a href="../detalle_eventos/cursos.php">Cancelar</a>
        </form>
    <?php
    }else{
    ?>
        <h2>¿Decea registrarse al curso?</h2>
        <form action="../php/usuarios.php" method="POST">
            <input type="hidden" name="id_evento" value="<?php echo $_GET['idcurso']?>">
            <input type="hidden" name="id_usuario" value="<?php echo $_GET['userlogueado']?>">
            <input type="submit" value="Inscribirse">
            <a href="../detalle_eventos/cursos.php?usuariologueado=<?php echo $_GET['userlogueado']?>">Cancelar</a>
        </form>
    <?php
    }
    ?>
    
</body>
</html>