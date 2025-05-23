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

    public function  obtenerTotalEncabezado($id_cliente) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT total, id_encabezado FROM encabezado_cargo 
             WHERE estatus_cargo = 1 AND id_cliente = :id_cliente");
        $stmt->execute(['id_cliente' => $id_cliente]);
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $datos;
    }

    public function actualizarTotalEncabezado($datos) {
        $db = Database::getInstance();

        $sql = "UPDATE encabezado_cargo 
            SET total = :total 
            WHERE id_cliente = :id_cliente
            ";

        $stmt = $db->prepare($sql);

        $valor = false;
        if ( $stmt->execute($datos) ) {
            $valor = true;
        }

        return $valor;
    }

    public function actualizarEstatusEncabezado($id_cliente) {
        $db = Database::getInstance();

        $sql = "UPDATE encabezado_cargo 
            SET estatus_cargo = 0
            WHERE id_cliente = :id_cliente
            ";

        $stmt = $db->prepare($sql);

        $valor = false;

        if ( $stmt->execute(['id_cliente' => $id_cliente]) ) {
            $valor = true;
        }

        return $valor;
    }
}