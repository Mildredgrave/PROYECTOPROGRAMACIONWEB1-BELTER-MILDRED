<?php

class ClienteData {
    private $_datos;
    public function __construct( $datos_cliente )
    {
        $this->_datos = $datos_cliente;
    }

    public function registrarCliente() {
        var_dump('dentro');
        var_dump($this->_datos);
    }
}

?>