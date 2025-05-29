<?php
session_start();

// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = ""; // o la contraseña de tu MySQL
$dbname = "mi_app";

$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    // Buscar usuario en BD
    $stmt = $conn->prepare("SELECT contrasenia FROM usuarios WHERE nombre = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hash);
        $stmt->fetch();

        if (password_verify($contrasenia, $hash)) {
            $_SESSION['usuario'] = $usuario;
            echo '<script>window.location.href = "../view/paginaCarga.php";</script>';
            exit();
        }
    }

    // Si llega aquí, es porque no coincidió
    $usuarioIngresado = urlencode($usuario);
    header("Location: ../login.php?error=1&usuario=$usuarioIngresado");
    exit();
}
?>
