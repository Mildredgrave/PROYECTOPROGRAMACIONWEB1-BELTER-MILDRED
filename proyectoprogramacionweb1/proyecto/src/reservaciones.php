<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $fecha_de_reservacion = $_POST['fecha'];
        $hora_de_reservacion = $_POST['hora'];
        $descripcion_de_la_reserva = $_POST['descripcion'];

        echo "<h2>Reservación exitosa</h2>";
        echo "<p>Hemos recibido tu solicitud de reservación y se te estará enviando un mensaje a tu número de teléfono $telefono</p>";

        (!is_dir('reservaciones')) ? mkdir('reservaciones') : '';
        chdir('reservaciones');
        $archivo = fopen('reservaciones.txt', 'a+');
        fwrite($archivo, "$nombre, $telefono, $fecha_de_reservacion, $hora_de_reservacion, $descripcion_de_la_reserva\n");
        fclose($archivo);

        echo '<a href="index.php" class="btn btn-primary mt-3">Volver al inicio</a>';
    }
?>
</body>
</html>