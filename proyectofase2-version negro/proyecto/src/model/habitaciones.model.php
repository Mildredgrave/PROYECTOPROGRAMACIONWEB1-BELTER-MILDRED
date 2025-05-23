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
}

?>