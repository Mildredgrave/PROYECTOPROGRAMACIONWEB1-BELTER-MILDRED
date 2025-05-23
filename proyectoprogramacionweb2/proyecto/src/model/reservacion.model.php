<?php
require_once '../db/conexion.php';

class ReservacionesModel {
    public function insertReservaciones($datos) {
        $db = Database::getInstance();

        $sql = "INSERT INTO reservaciones (
                id_cliente, 
                id_habitacion, 
                fecha_entrada 
            ) VALUES (
                :id_cliente, 
                :id_habitacion, 
                :fecha_entrada
            )";

        $stmt = $db->prepare($sql);

        $valor = false;
        if ( $stmt->execute($datos) ) {
            $valor = true;
        }

        return $valor;
    }

    public function obtenerInformacionReservaFecha($order, $fecha) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT id_habitacion FROM reservaciones 
        WHERE fecha_entrada = :fecha AND estado = 'Activa'
        ORDER BY fecha_entrada " . $order);

        $stmt->execute(['fecha' => $fecha]);
        $reservaciones = $stmt->fetchAll();

        return $reservaciones;
    }
}