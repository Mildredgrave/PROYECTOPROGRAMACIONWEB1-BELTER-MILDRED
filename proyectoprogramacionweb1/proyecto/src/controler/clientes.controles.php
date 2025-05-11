<?php
require_once '../service/cliente.service.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $nombre = '';
    $apellido = null;
    $fecha_nacimiento = '';
    $documento = null;
    $telefono = null;
    $genero = '';
    $discacidad = '';
    $nit = '';
    $reservacion = 'no';
    $fecha_ingreso = date('Y-m-d');
    $url = '../view/ingresoClientes.php';
    var_dump($_POST);
    die;
    if ( isset($_POST['nombre']) ) {
        $nombre = $_POST['nombre'];
    }

    if ( isset($_POST['apellido']) ) {
        $apellido = $_POST['apellido'];
    }

    if ( isset($_POST['fechaNacimiento']) ) {
        $fecha_nacimiento = $_POST['fechaNacimiento'];
    }

    if ( isset($_POST['documentoDeIdentificacion']) ) {
        $documento = $_POST['documentoDeIdentificacion'];
    }

    if ( isset($_POST['telefono']) ) {
        $telefono = $_POST['telefono'];
    }

    if ( isset($_POST['genero']) ) {
        $genero = $_POST['genero'];
    }

    if ( isset($_POST['discapacidad']) ) {
        $discacidad = $_POST['discapacidad'];
    }

    if ( isset($_POST['nit']) ) {
        $discacidad = $_POST['discapacidad'];
    }
    if ( isset($_POST['reservacion']) && isset($_POST['fecha']) &&
        $_POST['reservacion'] == 'si'
    ) {
        $fecha_ingreso = $_POST['fecha'];
        $reservacion = $_POST['reservacion'];
        $url = '../index.php';
    }

    $datos = array(
        'nombre' => $nombre,
        'apellido' => $apellido,
        'fechaNacimiento' => $fecha_nacimiento,
        'documentoDeIdentificacion' => $documento,
        'telefono' => $telefono,
        'genero' => $genero,
        'nit' => $genero,
        'discapacidad' => $discacidad,
        'fechaIngreso' => $fecha_ingreso,
        'reservacion' => $reservacion
    );

    $objeto_cliente = new ClienteData($datos);
    $resultado = $objeto_cliente->registrarClienteService();
    echo "<script>
          alert(" . json_encode($resultado) . ");
          window.location.href = '$url';
      </script>";
    exit();
}

?>