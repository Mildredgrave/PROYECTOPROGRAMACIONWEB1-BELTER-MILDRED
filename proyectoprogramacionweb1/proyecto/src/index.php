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
                <img src="imagenes/logohotel.png" alt="Logo Hotel" width="40" height="40">
                Hotel Paraíso
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Habitaciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Iniciar sesion</a></li>
                </ul>



            </div>
        </div>
    </nav>

    <header class="text-center bg-light p-5">
        <h1 class="display-4">Bienvenido al Hotel Paraíso</h1>
        <p class="lead">Descansa, relájate y disfruta de una experiencia inolvidable.</p>
        <a href="#" class="btn btn-primary btn-lg">Ver Habitaciones</a>
    </header>

    <div id="carouselHotel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/hotel1.avif" class="d-block w-100" alt="Hotel">
            </div>
            <div class="carousel-item">
                <img src="imagenes/hotelpiscina.webp" class="d-block w-100" alt="Piscina">
            </div>
            <div class="carousel-item">
                <img src="imagenes/hotelhabitaciones.jpg" class="d-block w-100" alt="Habitación">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHotel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHotel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container my-5 text-center">
        <h2>Sobre Nosotros</h2>
        <p>En Hotel El Paraíso ofrecemos un ambiente acogedor con servicios de calidad. Contamos con habitaciones confortables, piscina, restaurante gourmet y atención personalizada para que tu estadía sea perfecta.</p>
    </div>


    <div class="container my-5 text-center" >
        <?php
        $valores = [
            ["nombre" => "MISIÓN","descripcion" => "En Hotel El Paraíso, nos comprometemos a brindar a nuestros huéspedes una experiencia única e inolvidable en un entorno natural, acogedor y lleno de confort. Nos enfocamos en ofrecer servicios de alta calidad, atención personalizada y hospitalidad excepcional para garantizar estancias placenteras. Promovemos el turismo sostenible, respetando el medio ambiente y las comunidades locales, mientras creamos un ambiente ideal para el descanso, la recreación y el bienestar."],
            ["nombre" => "VISIÓN","descripcion" => "Ser reconocidos como el destino turístico preferido por viajeros nacionales e internacionales que buscan una combinación perfecta entre comodidad, naturaleza y excelencia en el servicio. En Hotel El Paraíso aspiramos a crecer con innovación constante, sin perder la calidez que nos caracteriza, para seguir siendo un referente de hospitalidad, sostenibilidad y experiencia turística memorable."],
        ];

        foreach ($valores as $declaracion) {
            echo '<div class="product-item my-4">';
            echo '  <div class="product-detail">';
            echo '      <h3>' . ($declaracion["nombre"]) . '</h3>';
            echo '      <p>' . ($declaracion["descripcion"]) . '</p>';
            echo '  </div>';
            echo '</div>';
        }
        ?>
    </div>



    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Sección</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Inicio</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Servicios</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Reservas</a></li>
                    </ul>
                </div>
                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Suscríbete a nuestro boletín</h5>
                        <p>Recibe novedades mensuales y promociones exclusivas.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Correo electrónico</label>
                            <input id="newsletter1" type="email" class="form-control" placeholder="Correo electrónico">
                            <button class="btn btn-primary" type="submit">Suscribirse</button>
                        </div>
                    </form>
                </div>
            </div>

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
