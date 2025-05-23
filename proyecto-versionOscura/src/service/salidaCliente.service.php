<?php
require_once '../model/clientes.model.php';
require_once '../model/encabezado-cargo.model.php';
class SalidaCliente {
    public function salidaCliente($id_cliente) {
        $objeto_cliente = new ClientesModel();
        $fecha_actual = date('Y-m-d');
        $datos_cliente = array(
            'fecha_salida' => $fecha_actual,
            'id_cliente'  => $id_cliente
        );

        $actualizar_cliente = $objeto_cliente->actualizarCliente($datos_cliente);

        $objeto_encabezado = new EncabezadoCargoModel();
        $actualizar_estatus = $objeto_encabezado->actualizarEstatusEncabezado($id_cliente);

        if ( $actualizar_cliente && $actualizar_estatus ) {
            return 'Cliente salio del hotel';
        }
    }
}