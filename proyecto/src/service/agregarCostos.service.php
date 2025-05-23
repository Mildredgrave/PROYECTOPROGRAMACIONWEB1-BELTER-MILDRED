<?php
require_once '../model/encabezado-cargo.model.php';
require_once '../model/detalle-cargo.model.php';
class AgregarCostos {
    public function actualizarCostos($datos, $id_cliente) {
        $objeto_encabezado_cargo = new EncabezadoCargoModel();
        $obtener_total = $objeto_encabezado_cargo->obtenerTotalEncabezado($id_cliente);

        $objeto_detalle = new DetalleCargoModel();

        $total = (float) $obtener_total[0]['total'];
        $id_encabezado = $obtener_total[0]['id_encabezado'];
        $detalle = false;
        foreach ( $datos as $rg ) {
            $registros = json_decode($rg, true);
            $total += (float) $registros['precio'];

            $datos_detalle = array(
              'id_encabezado' => $id_encabezado,
              'id_cargo'      => $registros['id_costo']
            );

            $inser_detalle = $objeto_detalle->insertarDetalle($datos_detalle);

            $detalle = $inser_detalle;
        }

        $datos_encabezado = array(
            'id_cliente' => $id_cliente,
            'total'      => $total
        );

        $actualizar_total = $objeto_encabezado_cargo->actualizarTotalEncabezado($datos_encabezado);

        if ( $detalle && $actualizar_total ) {
            return 'Se agregaron los cargos perfectamente';
        } else {
            return 'Algo salio mal';
        }
    }
}


?>