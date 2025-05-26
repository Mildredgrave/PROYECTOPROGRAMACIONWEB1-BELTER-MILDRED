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
                    "nombre" => "Pareja Romántica",
                    "descripcion" => "Un espacio acogedor y romántico, ideal para disfrutar en pareja con detalles especiales para una velada inolvidable.",
                    "imagen" => "imagenes/Habitación Estándar.jpeg"
                ],
                [
                    "nombre" => "Pareja Ejecutiva",
                    "descripcion" => "Habitación moderna y elegante, perfecta para viajes de negocios en pareja, con un área de trabajo cómoda y servicios ejecutivos.",
                    "imagen" => "imagenes/Suite Familiar.jpg"
                ],
                [
                    "nombre" => "Pareja Premium",
                    "descripcion" => "Una experiencia de lujo para parejas, con jacuzzi privado y vistas excepcionales para un descanso inigualable.",
                    "imagen" => "imagenes/SuiteLujo.jpg"
                ],
                [
                    "nombre" => "Pareja con Jacuzzi",
                    "descripcion" => "Un refugio íntimo con jacuzzi privado para relajarse y disfrutar en pareja.",
                    "imagen" => "imagenes/habitacioneconomica.webp"
                ],
                [
                    "nombre" => "Pareja Suite",
                    "descripcion" => "Una suite espaciosa y elegante, diseñada para parejas que buscan comodidad y privacidad en un ambiente exclusivo.",
                    "imagen" => "imagenes/habitaciontriple.jpg"
                ],
                [
                    "nombre" => "Pareja Mar",
                    "descripcion" => "Habitación con vistas espectaculares al mar, perfecta para disfrutar de la brisa y relajarse en pareja.",
                    "imagen" => "imagenes/suiteejecutiva.jpg"
                ],
                [
                    "nombre" => "Pareja Rio",
                    "descripcion" => "Una habitación acogedora y cálida, con vistas al río y detalles que invitan al descanso y la tranquilidad.",
                    "imagen" => "imagenes/habitacionromatica.jpg"
                ],
                [
                    "nombre" => "Pareja Presidencial",
                    "descripcion" => "La máxima expresión de lujo y confort, con terraza privada y vistas panorámicas para una experiencia única en pareja.",
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
