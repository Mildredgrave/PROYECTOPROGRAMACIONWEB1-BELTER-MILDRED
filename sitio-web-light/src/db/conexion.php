<?php
class Database {
    private static $instance = null;
    private $conn;

    private function __construct() {
        $config = [
            'host' => 'mysql-db',
            'port' => '3306',
            'dbname' => 'my_database',
            'username' => 'root',
            'password' => 'root_password'
        ];

        try {
            $this->conn = new PDO(
                "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8",
                $config['username'],
                $config['password']
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch(PDOException $e) {
            error_log("Error de conexión (puerto 3307): " . $e->getMessage());
            throw new Exception("Error al conectar con la base de datos en el puerto 3307");
        }
    }

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->conn;
    }
}