<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar eventos</title>
</head>
<body>
    <h1>Guardar eventos</h1>
    <form action="../php/eventos/guardar.php" method="POST">
        <label for="">Nombre de evento</label><br>
        <input type="text" name="nombre_evento" placeholder="Escriba el evento">
        <p></p>
        <label for="">Descripción</label><br>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        <p></p>
        <label for="">Fecha</label><br>
        <input type="date" name="fecha_evento" placeholder="Escriba el evento">
        <p></p>
        <label for="">Hora</label><br>
        <input type="time" name="hora_evento" placeholder="Escriba el evento">
        <p></p>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>