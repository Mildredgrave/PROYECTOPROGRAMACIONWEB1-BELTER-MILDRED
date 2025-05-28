<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <title>Hotel Paraiso Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

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
                <li class="nav-item"><a class="nav-link" href="../src/index.php#carouselHotel">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="../src/index.php#misionVision">Misión y Visión</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center" style="background-color: #000;">
        <div class="col-xl-10 col-lg-12 col-md-9" style="background-color: #000;">
            <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: #000;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block" style="background-color: #000;"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-white mb-4">Bienvenido al Hotel El Paraiso</h1>
                                </div>

                                <!-- Mensaje de error si lo hay -->
                                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                        Usuario o contraseña incorrectos.
                                    </div>
                                <?php endif; ?>

                                <form class="user" method="post" action="./controler/login.controler.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                                id="usuario" placeholder="Ingrese su Usuario" name="usuario"
                                                value="<?php echo isset($_GET['usuario']) ? htmlspecialchars($_GET['usuario']) : ''; ?>"
                                                required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                                id="contrasenia" placeholder="Ingrese su Contraseña" name="contrasenia"
                                                required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Ingresar">
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
