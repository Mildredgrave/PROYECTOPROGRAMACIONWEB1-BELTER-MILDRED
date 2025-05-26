<?php
require_once '../db/conexion.php';
class HabitacionesModel{

    public function obtenerhabitacionesPorEdadReservas($order, array $ids = []) {
        $db = Database::getInstance();
        $sql = "SELECT * FROM habitaciones";

        if (!empty($ids)) {
            $ids = array_map('intval', $ids);
            $sql .= " WHERE id_habitacion NOT IN (" . implode(',', $ids) . ")";
        }

        $sql .= " ORDER BY numero_habitacion " . $order;

        $stmt = $db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizarEstatusHabitacion($datos) {
        $db = Database::getInstance();
        $datos_habitacion = array(
            'id_habitacion' => $datos['id_habitacion'],
            'estatus_habitacion' => 1
        );

        $sql = "UPDATE habitaciones 
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