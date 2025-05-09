<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Habitaciones - Hotel Paraíso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="imagenes/logohotel.png" alt="Logo Hotel" width="40" height="40">
                Hotel Paraíso
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Iniciar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="text-center mb-4">Nuestras Habitaciones</h1>
        <div class="row">
            <?php
            $habitaciones = [
                [
                    "nombre" => "Habitación Estándar",
                    "descripcion" => "Perfecta para una estadía corta con todas las comodidades básicas.",
                    "imagen" => "imagenes/Habitación Estándar.jpeg"
                ],
                [
                    "nombre" => "Suite Familiar",
                    "descripcion" => "Espacio amplio ideal para familias, con zona de estar y balcón.",
                    "imagen" => "imagenes/Suite Familiar.jpg"
                ],
                [
                    "nombre" => "Suite Lujo",
                    "descripcion" => "Diseñada para el confort máximo, con jacuzzi privado y vista al mar.",
                    "imagen" => "imagenes/SuiteLujo.jpg"
                ],
                [
                    "nombre" => "Habitación Económica",
                    "descripcion" => "Una opción asequible sin sacrificar comodidad ni limpieza.",
                    "imagen" => "imagenes/habitacioneconomica.webp"
                ],
                [
                    "nombre" => "Habitación Triple",
                    "descripcion" => "Ideal para grupos pequeños o familias con niños.",
                    "imagen" => "imagenes/habitaciontriple.jpg"
                ],
                [
                    "nombre" => "Suite Ejecutiva",
                    "descripcion" => "Perfecta para viajes de negocios, con escritorio y Wi-Fi rápido.",
                    "imagen" => "imagenes/suiteejecutiva.jpg"
                ],
                [
                    "nombre" => "Habitación Romántica",
                    "descripcion" => "Decorada especialmente para parejas, con ambientación cálida.",
                    "imagen" => "imagenes/habitacionromatica.jpg"
                ],
                [
                    "nombre" => "Penthouse VIP",
                    "descripcion" => "La mejor vista del hotel, con cocina completa y terraza privada.",
                    "imagen" => "imagenes/vip.jpg"
                ]
            ];

            foreach ($habitaciones as $hab) {
                echo '<div class="col-md-4 mb-4">';
                echo '  <div class="card h-100 shadow">';
                echo '    <img src="' . $hab['imagen'] . '" class="card-img-top" alt="Imagen de habitación">';
                echo '    <div class="card-body">';
                echo '      <h5 class="card-title">' . $hab['nombre'] . '</h5>';
                echo '      <p class="card-text">' . $hab['descripcion'] . '</p>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="container">
            <footer class="py-5">
                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2025 Hotel Paraíso.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-twitter"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-instagram"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
