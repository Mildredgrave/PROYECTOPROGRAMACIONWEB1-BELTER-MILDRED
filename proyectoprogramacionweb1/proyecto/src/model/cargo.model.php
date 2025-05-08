<?php
require_once '../db/conexion.php';

class CargoModel {
    public function obtenerTodosLosCargo() {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM Cargos");
        $stmt->execute();
        $cargos = $stmt->fetchAll();

        return $cargos;
    }
}

?>