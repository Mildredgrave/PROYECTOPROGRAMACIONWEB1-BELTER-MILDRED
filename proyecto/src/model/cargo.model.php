<?php
require_once '../db/conexion.php';

class CargoModel {
    public function obtenerTodosLosCargo() {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM cargos");
        $stmt->execute();
        $cargos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $cargos;
    }

    public function obtenerCargosAlimentos() {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM cargos WHERE id_cargo != 6");
        $stmt->execute();
        $cargos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $cargos;
    }
}

?>