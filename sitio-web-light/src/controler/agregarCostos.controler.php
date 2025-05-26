<?php
require_once '../service/agregarCostos.service.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $id_cliente = $_POST['id_cliente'];

    if ( !isset($_POST['costos']) ) {
        echo "<script>
          alert('Debes elegir un cargo.');
          window.location.href = '../view/paginaAgregarCostos.php?id_cliente={$id_cliente}';
        </script>";
        exit();
    }

    $datos_costos = $_POST['costos'];
    $objeto_agregar_costos = new AgregarCostos();
    $actualizacion_costos =
        $objeto_agregar_costos->actualizarCostos($datos_costos, $id_cliente);

    echo "<script>
          alert(" . json_encode($actualizacion_costos) . ");
          window.location.href = '../view/paginaCarga.php';
      </script>";
    exit();

}
?>