<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuarios = array(
        array(
            'usuario' => 'admin',
            'contrasenia' => 'admin'
        )
    );

    $usuarioValido = false;

    foreach ($usuarios as $rg) {
        if (
            $rg['usuario'] === $_POST['usuario'] &&
            $rg['contrasenia'] === $_POST['contrasenia']
        ) {
            $usuarioValido = true;
            break;
        }
    }

    if ($usuarioValido) {
        // Redirigir a la página principal si las credenciales son correctas
        echo '<script>window.location.href = "../view/paginaCarga.php";</script>';
        exit();
    } else {
        // Redirigir al login con error y pasar el usuario para mostrarlo en el campo
        $usuarioIngresado = urlencode($_POST['usuario']);
        header("Location: ../login.php?error=1&usuario=$usuarioIngresado");
        exit();
    }
}
?>
