<?php
require_once '../db/conexion.php';

class DetalleCargoModel {

    public function insertarDetalle($datos) {
        $db = Database::getInstance();
        $sql = "INSERT INTO detalle_cargo (
                id_encabezado, 
                id_cargo
            ) VALUES (
                :id_encabezado, 
                :id_cargo
            )";

        $stmt = $db->prepare($sql);

        $valor = false;
        if ( $stmt->execute($datos) ) {
            $valor = true;
        }

        return $valor;
    }
}

?>