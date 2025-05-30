<?php
require_once '../db/conexion.php';

class EncabezadoCargoModel{
    public function insertarEncabezado($datos) {
        $db = Database::getInstance();
        $sql = "INSERT INTO encabezado_cargo (
                id_cliente, 
                id_habitacion, 
                total, 
                estatus_cargo
            ) VALUES (
                :id_cliente, 
                :id_habitacion, 
                :total,  
                :estatus_cargo
            )";

        $stmt = $db->prepare($sql);

        $valor = 0;
        if ( $stmt->execute($datos) ) {
            $valor = $db->lastInsertId();
        }

        return $valor;
    }
}