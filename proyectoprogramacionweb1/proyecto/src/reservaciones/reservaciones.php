<?php
$archivo = "reservaciones.txt";

if (file_exists($archivo)) {
    $reservaciones = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //FILE_IGNORE_NEW_LINES elimina el salto de línea (\n) al final de cada línea, FILE_SKIP_EMPTY_LINES hace que se ignoren las líneas vacías (no se agregan al array)
} else {
    $reservaciones = [];
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hotel Paraíso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../imagenes/logohotel.png" alt="Logo Hotel" width="40" height="40">
                Hotel Paraíso
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="../login.php">Iniciar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php if (empty($reservaciones)): ?>
    <div class="container mt-5">
        <p class="text-center">No hay reservaciones registradas.</p>
    </div>
    <?php else: ?>
        <div class="container mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservaciones as $reserva): ?>
                        <?php
                        $partes = explode(", ", $reserva);
                        $nombre = str_replace("Nombre: ", "", $partes[0]);
                        $telefono = str_replace("Teléfono: ", "", $partes[1]);
                        $fecha = str_replace("Fecha: ", "", $partes[2]);
                        $hora = str_replace("Hora: ", "", $partes[3]);
                        $descripcion = str_replace("Descripción: ", "", $partes[4]);
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($nombre); ?></td>
                            <td><?php echo htmlspecialchars($telefono); ?></td>
                            <td><?php echo htmlspecialchars($fecha); ?></td>
                            <td><?php echo htmlspecialchars($hora); ?></td>
                            <td><?php echo htmlspecialchars($descripcion); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>