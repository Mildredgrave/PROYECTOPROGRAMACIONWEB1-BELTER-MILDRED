<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hotel El Paraiso</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-hotel"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin Hotel Paraiso</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="./paginaCarga.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Página Principal</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="./ingresoClientes.php">
                <i class="fas fa-fw fa-user"></i>
                <span>Ingresar Clientes</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
<<<<<<< Updated upstream
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-dark small">
                                <?php echo htmlspecialchars($_SESSION['usuario']); ?>
                            </span>
                            <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                        </a>
                    </li>
                </ul>
=======

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Empleado</span>
                                <img class="img-profile rounded-circle"
                                     src="../img/undraw_profile.svg">
                            </a>
                        </li>
                    </ul>
>>>>>>> Stashed changes
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Ingresar Clientes</h1>
                <p class="mb-4">Ingreso de clientes para una habitación del hotel.</p>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulario de clientes</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" method="post" action="../controler/clientes.controler.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control form-control-user ml-2"
                                               id="nombre" name="nombre" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control form-control-user ml-2"
                                               id="apellido" name="apellido">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" class="form-control form-control-user ml-2"
                                               id="fechaNacimiento" name="fechaNacimiento" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>DPI/Pasaporte</label>
                                        <input type="text" class="form-control form-control-user ml-2"
                                               id="documentoDeIdentificacion" name="documentoDeIdentificacion">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Teléfono</label>
                                        <input type="text" class="form-control form-control-user ml-2"
                                               id="telefono" name="telefono">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>NIT</label>
                                        <input type="text" class="form-control form-control-user ml-2"
                                               id="nit" name="nit">
                                    </div>
                                </div>

                                <!-- Género y Discapacidad -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="d-block">Género</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="genero" id="genero1" value="M" checked>
                                            <label class="form-check-label" for="genero1">Masculino</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="genero" id="genero2" value="F">
                                            <label class="form-check-label" for="genero2">Femenino</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="d-block">Discapacidad</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="discapacidad" id="discapacidad1" value="Si" checked>
                                            <label class="form-check-label" for="discapacidad1">Sí</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="discapacidad" id="discapacidad2" value="No">
                                            <label class="form-check-label" for="discapacidad2">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Guardar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Content -->
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Hotel Paraiso 2025</span>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>
    <!-- End Content Wrapper -->
</div>
<!-- End Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecciona "Logout" abajo si estás listo para finalizar la sesión actual.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
