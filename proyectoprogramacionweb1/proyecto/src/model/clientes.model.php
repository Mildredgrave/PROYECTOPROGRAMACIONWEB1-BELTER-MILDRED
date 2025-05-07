<?php
require_once '../db/conexion.php';
class ClientesModel {
    public function insertarClientes($datos) {
        $db = Database::getInstance();
        $sql = "INSERT INTO Clientes (
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

        $valor = false;
        if ( $stmt->execute($datos) ) {
            $valor = true;
        }

        return $valor;
    }
}
?>
