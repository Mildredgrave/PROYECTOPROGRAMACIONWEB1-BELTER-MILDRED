<?php
require_once '../service/salidaCliente.service.php';
$id_cliente = $_GET['id_cliente'];

$objeto_salida = new SalidaCliente();
$cliente = $objeto_salida->salidaCliente($id_cliente);

echo "<script>
          alert(" . json_encode($cliente) . ");
          window.location.href = '../view/paginaCarga.php';
      </script>";
exit();
?>