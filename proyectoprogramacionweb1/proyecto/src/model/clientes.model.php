<?php
require_once '../db/conexion.php';
class ClientesModel {
    public function insertarClientes($datos) {
        $db = Database::getInstance();

        unset($datos['reservacion']);
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

    public function obtenerClientesTabla() {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT 
            e.total, 
            e.estatus_cargo,
            c.nombre, 
            c.id_cliente, 
            c.apellido, 
            c.fecha_registro_habitacion, 
            c.fecha_salida, 
            h.nombre_habitacion 
            FROM encabezado_cargo AS e 
            INNER JOIN clientes as c on e.id_cliente = c.id_cliente
            INNER JOIN habitaciones as h on e.id_habitacion = h.id_habitacion
            WHERE estatus_cargo = 1 ORDER BY h.id_habitacion ASC;");
        $stmt->execute();
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $clientes;
    }
    public function actualizarCliente($datos) {
        $db = Database::getInstance();

        $sql = "UPDATE clientes 
            SET fecha_salida = :fecha_salida 
            WHERE id_cliente = :id_cliente
            ";

        $stmt = $db->prepare($sql);

        $valor = false;
        if ( $stmt->execute($datos) ) {
            $valor = true;
        }

        return $valor;
    }

}
?>
