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

    public function  obtenerEncabezadoActivo() {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT id_habitacion FROM encabezado_cargo WHERE estatus_cargo = 1");
        $stmt->execute();
        $datos = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

        return $datos;
    }
}