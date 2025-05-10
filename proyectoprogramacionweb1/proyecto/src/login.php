<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hotel "El Paraíso"</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <style>
        body {
            background-image: url('imagenes/hotel.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
        }

        .card {
            backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
        }

        .login-logo img {
            width: 80px;
        }

        .btn-user {
            width: 100%;
            padding: 10px;
        }

        .form-control-user {
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="card shadow-lg">
            <div class="card-body p-4">
                <div class="text-center mb-4 login-logo">
                    <img src="imagenes/logohotel.png" alt="Logo Hotel El Paraíso">
                    <h4 class="mt-3 mb-0">Hotel "El Paraíso"</h4>
                    <p class="text-muted small">Acceso para empleados</p>
                </div>

                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>

<<<<<<< Updated upstream
                <form method="post" action="./controler/login.controler.php">
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-user" id="usuario" name="usuario" placeholder="Ingrese su Usuario" required>
=======
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">El Paraiso</h1>
                                </div>
                                <form class="user" method="post" action="./controler/login.controler.php">
                                    <div class="form-group">
                                        <input type="usuario" class="form-control form-control-user"
                                               id="usuario" placeholder="Ingrese su Usuario" name="usuario"
                                                required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="contrasenia" placeholder="Ingrese su Contraseña" name="contrasenia"
                                        required>
                                    </div>
                                    <div  class="form-group">
                                        <input type="submit" class="btn btn-primary btn-user btn-block" placeholder="Ingresar">
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
>>>>>>> Stashed changes
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control form-control-user" id="contrasenia" name="contrasenia" placeholder="Ingrese su Contraseña" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-user">Ingresar</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <a href="index.php" class="btn btn-link text-decoration-none">← Volver al sitio público</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
