<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once "database.php";
require_once "proveedor.php";

$database = new Database();
$db = $database->connect();
$proveedor = new Proveedor($db);

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['razon'])) {
        $data = $animal->getByRazon($_GET['razon']);
        echo json_encode($data ? $data : ["mensaje" => "Proveedor no encontrado"]);
    } else {
        $data = $animal->getAll();
        echo json_encode($data);
    }
} else {
    echo json_encode(["error" => "Método no permitido"]);
}
?>
