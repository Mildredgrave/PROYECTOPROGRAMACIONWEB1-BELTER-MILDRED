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
<body class="bg-dark text-white">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <li class="nav-item"><a class="nav-link" href="#carouselHotel">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#misionVision">Misión y Visión</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Iniciar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="content">
    <div class="modal fade" id="modalCotizacion" tabindex="-1" aria-labelledby="modalCotizacionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalCotizacionLabel">Nueva Reservación</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="controler/clientes.controles.php" method="POST">
                        <div class="mb-3">
                                <label for="nombre" class="form-label">Nombres:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" maxlength="50" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Apellidos:</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" maxlength="50" placeholder="Ingrese su apellido">
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha Nacimiento:</label>
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                        </div>
                        <div class="mb-3">
                            <label for="numeroDeIdentificacion" class="form-label">DPI / Pasaporte:</label>
                            <input type="texto" class="form-control" id="documentoDeIdentificacion" name="documentoDeIdentificacion" placeholder="Ingrese su Numero de Identificación" maxlength="20">
                        </div>
                        <div class="mb-3">
                            <label for="NIT" class="form-label">NIT:</label>
                            <input type="texto" class="form-control" id="nit" name="nit" placeholder="Ingrese su NIT" maxlength="10">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="texto" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha de Reservación:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                        <div class="mb-3">
                            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Genero</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="genero1" value="F" checked>
                                    <label class="form-check-label" for="genero1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="genero2" value="M">
                                    <label class="form-check-label" for="genero2">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Reservación</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reservacion" id="genero1" value="si" checked>
                                    <label class="form-check-label" for="reservacionSi">
                                        Sí
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reservacion" id="genero2" value="no" disabled>
                                    <label class="form-check-label" for="reservacionNo">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Reservar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="text-center bg-dark text-white p-5">
    <h1 class="display-4">Bienvenido al Hotel Paraíso</h1>
    <p class="lead">Descansa, relájate y disfruta de una experiencia inolvidable.</p>
    <a href="habitaciones.php" class="btn btn-primary">Ver Habitaciones</a>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCotizacion">
        Hacer una Reservación
    </button>
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

<div class="container my-5 text-center bg-dark text-white p-4 rounded">
    <h2>Sobre Nosotros</h2>
    <p>En Hotel El Paraíso ofrecemos un ambiente acogedor con servicios de calidad. Contamos con habitaciones confortables, piscina, restaurante gourmet y atención personalizada para que tu estadía sea perfecta.</p>
</div>

<div class="container my-5 text-center bg-dark text-white p-4 rounded" id="misionVision">
    <?php
    $valores = [
        ["nombre" => "MISIÓN", "descripcion" => "En Hotel El Paraíso, nos comprometemos a brindar a nuestros huéspedes una experiencia única e inolvidable en un entorno natural, acogedor y lleno de confort. Nos enfocamos en ofrecer servicios de alta calidad, atención personalizada y hospitalidad excepcional para garantizar estancias placenteras. Promovemos el turismo sostenible, respetando el medio ambiente y las comunidades locales, mientras creamos un ambiente ideal para el descanso, la recreación y el bienestar."],
        ["nombre" => "VISIÓN", "descripcion" => "Ser reconocidos como el destino turístico preferido por viajeros nacionales e internacionales que buscan una combinación perfecta entre comodidad, naturaleza y excelencia en el servicio. En Hotel El Paraíso aspiramos a crecer con innovación constante, sin perder la calidez que nos caracteriza, para seguir siendo un referente de hospitalidad, sostenibilidad y experiencia turística memorable."],
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
    <footer class="py-5 border-top border-secondary">
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4">
            <p class="text-white">&copy; 2025 Hotel Paraíso.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="text-white" href="#"><i class="bi bi-twitter"></i></a></li>
                <li class="ms-3"><a class="text-white" href="#"><i class="bi bi-instagram"></i></a></li>
                <li class="ms-3"><a class="text-white" href="#"><i class="bi bi-facebook"></i></a></li>
            </ul>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
