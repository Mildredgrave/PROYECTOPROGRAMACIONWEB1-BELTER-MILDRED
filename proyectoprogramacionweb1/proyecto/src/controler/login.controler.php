<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $usuarios = array(
            array(
                'usuario' => 'Admin',
                'contrasenia' => '12345'
            )
        );

        foreach ( $usuarios as $rg ) {
            if ( $rg['usuario'] == $_POST['usuario'] &&
                $rg['contrasenia'] == $_POST['contrasenia']
            ) {
                echo '<script>window.location.href = "../view/paginaCarga.php"</script>>';
                exit();
            } else {
                echo "<script>
                    alert('Algo salio mal al iniciar sesión.);
                    window.location.href = '../login.php';
                </script>";
                exit();
            }
        }
    }

?>