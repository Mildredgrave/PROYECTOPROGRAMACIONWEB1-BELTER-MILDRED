<?php
include '../model/habitaciones.model.php';
include '../model/clientes.model.php';
class ClienteData {
    private $_datos;
    public function __construct( $datos_cliente )
    {
        $this->_datos = $datos_cliente;
    }

    public function registrarClienteService() {

        $objeto_habitaciones = new HabitacionesModel();
        $fecha_nacimiento = new DateTime($this->_datos['fechaNacimiento']);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        $edad_anos = $edad->y;
        $discapacidad = $this->_datos['discapacidad'];

        $order = 'DESC';
        if ($edad_anos > 50 || $discapacidad == 'Si') {
            $order = 'ASC';
        }

        $habitacio = $objeto_habitaciones->optenerhabitacionesPorEdad($order);
        $habitacio_asignada = array();

        if ( !empty($habitacio) ) {
            $habitacio_asignada = $habitacio[0];
        } else {
            return 'No hay habitacines';
        }

        unset($this->_datos['discapacidad']);
        $objeto_clientes = new ClientesModel();
        $insertar_clientes = $objeto_clientes->insertarClientes($this->_datos);
        if ( !$insertar_clientes ) {
            return 'No se pudo ingresar el cliente';
        }

        //ya funciona
//        $actualizar_habitacion = $objeto_habitaciones->actualizarEstatusHabitacion($habitacio_asignada);
//        var_dump($actualizar_habitacion);
//        if ( !$actualizar_habitacion ) {
//            return 'No se pudo actualizar el estatus de la habitación';
//        }


    }
}

?>