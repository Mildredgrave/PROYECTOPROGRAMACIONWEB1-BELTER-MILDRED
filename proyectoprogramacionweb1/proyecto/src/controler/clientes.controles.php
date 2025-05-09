<?php
include '../service/cliente.service.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $nombre = '';
    $apellido = null;
    $fecha_nacimiento = '';
    $documento = null;
    $telefono = null;
    $genero = '';
    $discacidad = '';
    var_dump($_POST);
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

    $fecha_ingreso = date('Y-m-d');
    $datos = array(
        'nombre' => $nombre,
        'apellido' => $apellido,
        'fechaNacimiento' => $fecha_nacimiento,
        'documentoDeIdentificacion' => $documento,
        'telefono' => $telefono,
        'genero' => $genero,
        'discapacidad' => $discacidad,
        'fechaIngreso' => $fecha_ingreso,
    );

    $objeto_cliente = new ClienteData($datos);

    if ( $objeto_cliente->registrarClienteService() ) {

    }
}

?>