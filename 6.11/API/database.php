<?php
const DB_HOST = 'localhost'; // Dirección del servidor de base de datos (normalmente 'localhost')
const DB_NAME = 'datos'; // Nombre de la base de datos a la que queremos conectarnos
const DB_USER = 'root'; // Usuario de la base de datos (por defecto en XAMPP suele ser 'root')
const DB_PASS = ''; // Contraseña del usuario de la base de datos (en XAMPP suele estar vacía)

class Database {
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $conn; // Aquí se guardará el objeto de conexión PDO
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->db_name, // Cadena de conexión con host y nombre de la base
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET NAMES utf8");
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>