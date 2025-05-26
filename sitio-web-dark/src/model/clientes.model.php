<?php
require_once '../db/conexion.php';
class ClientesModel {
    public function insertarClientes($datos) {
        $db = Database::getInstance();

        unset($datos['reservacion']);
        var_dump($datos);
        $sql = "INSERT INTO clientes (
                nombre, 
                apellido, 
                fecha_nacimiento, 
                fecha_registro_habitacion, 
                dpi_passaporte, 
                telefono, 
                genero,
                nit
            ) VALUES (
                :nombre, 
                :apellido, 
                :fechaNacimiento, 
                :fechaIngreso, 
                :documentoDeIdentificacion, 
                :telefono, 
                :genero,
                :nit
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
