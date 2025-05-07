<?php
include '../service/cliente.service.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    var_dump('dentro del cliente');
    $nombre = '';
    $apellido = null;
    $fecha_nacimiento = '';
    $documento = null;
    $telefono = '';
    $genero = '';

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

    $datos = array(
        'nombre' => $nombre,
        'apellido' => $apellido,
        'fechaNacimiento' => $fecha_nacimiento,
        'documentoDeIdentificacion' => $documento,
        'telefono' => $telefono,
        'genero' => $genero,
    );

    $objeto_cliente = new ClienteData($datos);
    $objeto_cliente->registrarCliente();
}

?>