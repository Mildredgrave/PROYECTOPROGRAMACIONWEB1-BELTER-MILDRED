<?php
require_once '../model/habitaciones.model.php';
require_once '../model/clientes.model.php';
require_once '../model/cargo.model.php';
require_once '../model/encabezado-cargo.model.php';
require_once '../model/detalle-cargo.model.php';
require_once '../model/reservacion.model.php';
class ClienteData {
    private $_datos;
    public function __construct( $datos_cliente )
    {
        $this->_datos = $datos_cliente;
    }

    public function registrarClienteService() {
        $fecha_nacimiento = new DateTime($this->_datos['fechaNacimiento']);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        $edad_anios = $edad->y;
        $discapacidad = $this->_datos['discapacidad'];

        if ( $edad_anios < 18 ) {
            $tipo_proceso = 'reservación';

            if ( $this->_datos['reservacion'] == 'no' ){
                $tipo_proceso = 'adquirir';
            }
            return 'Debes tener al menos 18 años para poder ' . $tipo_proceso. ' una habitación';
        }

        $order = 'DESC';
        if ($edad_anios > 50 || $discapacidad == 'Si') {
            $order = 'ASC';
        }

        $objeto_habitaciones = new HabitacionesModel();
        if ( $this->_datos['reservacion'] == 'si'  ) {
            $fecha = $this->_datos['fechaIngreso'];
            $objeto_reservacion = new ReservacionesModel();
            $reservas = $objeto_reservacion->obtenerInformacionReservaFecha($order, $fecha);
            $habitacion = $objeto_habitaciones->obtenerhabitacionesPorEdadReservas($order, $reservas);
        }
        var_dump($habitacion);
        $habitacio_asignada = array();
        if ( !empty($habitacion) ) {
            $habitacio_asignada = $habitacion[0];
        } else {
            return 'No hay habitacines';
        }

        unset($this->_datos['discapacidad']);
        $objeto_clientes = new ClientesModel();
        $id_cliente = $objeto_clientes->insertarClientes($this->_datos);
        if ( !$id_cliente ) {
            return 'No se pudo ingresar el cliente';
        }

        if ( $this->_datos['reservacion'] == 'no' ) {
//            $actualizar_habitacion = $objeto_habitaciones->actualizarEstatusHabitacion($habitacio_asignada);
//            if ( !$actualizar_habitacion ) {
//                return 'No se pudo actualizar el estatus de la habitación';
//            }

            $objeto_cargos = new CargoModel();
            $cargos = $objeto_cargos->obtenerTodosLosCargo();
            $precio_habitacion = 0;
            $id_cargo = '';
            foreach ( $cargos as $rg_cargo ) {
                if ( $rg_cargo['descripción'] == 'Habitación' ) {
                    $precio_habitacion = (int) $rg_cargo['precio_cargo'];
                    $id_cargo = (int) $rg_cargo['id_cargo'];
                }
            }

            $datos_encabezado_cargo = array(
                'id_cliente' => $id_cliente,
                'id_habitacion' => $habitacio_asignada['id_habitacion'],
                'total' => $precio_habitacion,
                'estatus_cargo' => 1
            );

            $objeto_encabezado_cargos = new EncabezadoCargoModel();
            $id_encabezado = $objeto_encabezado_cargos->insertarEncabezado($datos_encabezado_cargo);
            if ( !$id_encabezado ) {
                return 'No se pudo insertar el encabezado.';
            }

            $datos_detalle_cargos = array(
                'id_encabezado' => $id_encabezado,
                'id_cargo'      => $id_cargo
            );

            $objeto_detalle_cargos = new DetalleCargoModel();
            $insert_detalle = $objeto_detalle_cargos->insertarDetalle($datos_detalle_cargos);
            if ( !$insert_detalle ) {
                return 'No se pudo insertar el detalle.';
            }
            return 'La hibitación fue asignada y el cliente fue creado.';
        } else {
                $datos_reservacion = array(
                    'id_cliente' => $id_cliente,
                    'id_habitacion' => $habitacio_asignada['id_habitacion'],
                    'fecha_entrada' => $this->_datos['fechaIngreso'],
                );
                $insert_reserva = $objeto_reservacion->insertReservaciones($datos_reservacion);

                if ( !$insert_reserva ) {
                    return 'No se pudo ingresar la reservación';
                }

                return 'Se ingreso la reservación';
        }
    }
}
?>