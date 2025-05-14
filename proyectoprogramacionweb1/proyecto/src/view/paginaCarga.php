<?php
require_once '../model/clientes.model.php';
?>
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
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

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
            </nav>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Hotel Paraiso</h1>
                <p class="mb-4">Información sobre clientes y habitaciones.</p>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Habitación</th>
                                    <th>Cliente</th>
                                    <th>Estatus</th>
                                    <th>Total</th>
                                    <th>Fecha Ingreso</th>
                                    <th>Fecha Salida</th>
                                    <th>Agregar Productos</th>
                                    <th>Darle de Baja Cliente</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $objeto_clientes = new ClientesModel();
                                        $clientes = $objeto_clientes->obtenerClientesTabla();
                                        foreach ( $clientes as $rg_clientes ) {
                                            $id_cliente = $rg_clientes['id_cliente'];
                                            $habitacion = $rg_clientes['nombre_habitacion'];
                                            $nombre = $rg_clientes['nombre'];
                                            $apellido = '';
                                            $total = number_format( (float) $rg_clientes['total'], 2);
                                            $fecha_ingreso = date('d-m-Y', strtotime($rg_clientes['fecha_registro_habitacion']));
                                            $fecha_salida = '';

                                            if ( isset($rg_clientes['fecha_salida']) ) {
                                                $fecha_salida = date('d-m-Y', strtotime($rg_clientes['fecha_salida']));
                                            }

                                            if ( isset($rg_clientes['apellido']) ) {
                                                $apellido = $rg_clientes['apellido'];
                                                $nombre .= ' ' . $apellido;
                                            }

                                            echo <<<end
                                            <tr>
                                                <td>$habitacion</td>
                                                <td>$nombre</td>
                                                <td>Ocupada</td>
                                                <td>$total</td>
                                                <td>$fecha_ingreso</td>
                                                <td>$fecha_salida</td>
                                                <td>
                                                    <a href="./paginaAgregarCostos.php?id_cliente=$id_cliente" class="btn btn-success btn-icon-split">
                                                    <span class="icon text-white-50">
                                                         <i class="fas fa-shopping-cart"></i>
                                                    </span>
                                                        <span class="text">Agregar Costos</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="../controler/salidaCliente.controler.php?id_cliente=$id_cliente" class="btn btn-success btn-icon-split
                                                    bg-gradient-danger">
                                                    <span class="icon text-white-50">
                                                         <i class="fas fa-long-arrow-alt-right"></i>
                                                    </span>
                                                        <span class="text">Salir del Hotel</span>
                                                    </a>
                                                </td>
                                            </tr>
                                           end;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Hotel Paraiso 2025</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

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
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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