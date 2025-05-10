<?php
require_once '../db/conexion.php';
class HabitacionesModel{

    public function     optenerhabitacionesPorEdad($order) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM Habitaciones WHERE estatus_habitacion = :status
                                    ORDER BY numero_habitacion " . $order);
        $stmt->execute(['status' => 0]);
        $habitaciones = $stmt->fetchAll();

        return $habitaciones;
    }

    public function actualizarEstatusHabitacion($datos) {
        $db = Database::getInstance();
        $datos_habitacion = array(
            'id_habitacion' => $datos['id_habitacion'],
            'estatus_habitacion' => 1
        );

        $sql = "UPDATE Habitaciones 
            SET estatus_habitacion = :estatus_habitacion 
            WHERE id_habitacion = :id_habitacion
            ";

        $stmt = $db->prepare($sql);

        $valor = false;

        if ( $stmt->execute($datos_habitacion) ) {
            $valor = true;
        }

        return $valor;
    }
}

?>