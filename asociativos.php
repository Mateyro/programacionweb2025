<?php

//act 1
print ("<br>Actividad 1: <br><br>");

$videojuego = [
    "titulo"=> "The Legend of Zelda",
    "consola" => "NES",
    "año" => "1986",
    "precio"=> "50.00",
];
print($videojuego["titulo"]."<br>");
print($videojuego["consola"]."<br>");
print($videojuego["año"]."<br>");
print($videojuego["precio"]."<br>");

print("<br>Actividad 2: <br><br>");
//act 2
print("Titulo: ".$videojuego["titulo"]."<br>");
print("Consola: ".$videojuego["consola"]."<br>");
print("Año: ".$videojuego["año"]."<br>");
print("Precio: ".$videojuego["precio"]."<br>");

print("<br>Actividad 3: <br><br>");
//act 3

$videojuego["stock"] = "10";
$videojuego["venta"] = "Si";

print("Titulo: ".$videojuego["titulo"]."<br>");
print("Consola: ".$videojuego["consola"]."<br>");
print("Año: ".$videojuego["año"]."<br>");
print("Precio: ".$videojuego["precio"]."<br>");
print("Stock: ".$videojuego["stock"]."<br>");
print("Venta: ".$videojuego["venta"]."<br>");


print("<br>Actividad 4: <br><br>");
//act 4

$inventario = [
    "The Legend of Zelda"=> "0",
    "Super Mario Bros 3."=> "1",
    "Chrono Trigger"=> "2",
];
$inventario["0"] = [
    "consola" => "NES",
    "año" => "1986",
    "precio"=> "50.00",
    "stock"=> "10",
    "venta"=> "Si",
];
$inventario["1"] = [
    "consola" => "NES",
    "año" => "1988",
    "precio"=> "45.00",
    "stock"=> "15",
    "venta"=> "Si",
];
$inventario["2"] = [
    "consola" => "SNES",
    "año" => "1995",
    "precio"=> "80.00",
    "stock"=> "5",
    "venta"=> "Si",
];

foreach($inventario as $x){
    if ($x > array_key_last($inventario)) {
        break;
    }
    $keys = array_keys($inventario);
    print("Titulo: ".$keys[$x]."<br>");
    print("Consola: ".$inventario[$x]["consola"]."<br>");
    print("Año: ".$inventario[$x]["año"]."<br>");
    print("Precio: ".$inventario[$x]["precio"]."<br>");
    print("Stock: ".$inventario[$x]["stock"]."<br>");
    print("En venta?: ".$inventario[$x]["venta"]."<br>");
    print("<br>");

}

?>