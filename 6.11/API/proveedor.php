<?php
class proveedor {
    private $conn;
    private $table = "proveedores";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT `razon`, `nombre`, `correo`, `telefono`, `producto` FROM {$this->table}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByRazon($razon) {
        $query = "SELECT `razon`, `nombre`, `correo`, `telefono`, `producto` FROM {$this->table} FROM {$this->table} WHERE razon = :razon";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":razon", $razon, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
