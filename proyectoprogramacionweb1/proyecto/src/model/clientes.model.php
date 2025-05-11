<?php
require_once '../db/conexion.php';
class ClientesModel {
    public function insertarClientes($datos) {
        $db = Database::getInstance();
        $sql = "INSERT INTO clientes (
                nombre, 
                apellido, 
                fecha_nacimiento, 
                fecha_registro_habitacion, 
                dpi_passaporte, 
                telefono, 
                genero
            ) VALUES (
                :nombre, 
                :apellido, 
                :fechaNacimiento, 
                :fechaIngreso, 
                :documentoDeIdentificacion, 
                :telefono, 
                :genero
            )";

        $stmt = $db->prepare($sql);

        $valor = 0;
        if ( $stmt->execute($datos) ) {
            $valor = $db->lastInsertId();
        }

        return $valor;
    }
}
?>
