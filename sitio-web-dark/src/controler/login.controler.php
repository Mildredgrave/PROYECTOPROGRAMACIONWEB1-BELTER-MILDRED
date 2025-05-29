<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuarios = array(
        array(
            'usuario' => 'Mildred Grave',
            'contrasenia' => 'Mildred2004'
        ),
        array(
            'usuario' => 'Belter Vasquez',
            'contrasenia' => 'Belter2003'
        )
    );

    $usuarioValido = false;

    foreach ($usuarios as $rg) {
        if (
            $rg['usuario'] === $_POST['usuario'] &&
            $rg['contrasenia'] === $_POST['contrasenia']
        ) {
            $usuarioValido = true;
            $_SESSION['usuario'] = $rg['usuario']; // Guardar usuario en la sesión
            break;
        }
    }

    if ($usuarioValido) {
        echo '<script>window.location.href = "../view/paginaCarga.php";</script>';
        exit();
    } else {
        $usuarioIngresado = urlencode($_POST['usuario']);
        header("Location: ../login.php?error=1&usuario=$usuarioIngresado");
        exit();
    }
}
?>
