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
    "precio"=> "50",
    "stock"=> "10",
    "venta"=> "Si",
];
$inventario["1"] = [
    "consola" => "NES",
    "año" => "1988",
    "precio"=> "45",
    "stock"=> "15",
    "venta"=> "Si",
];
$inventario["2"] = [
    "consola" => "SNES",
    "año" => "1995",
    "precio"=> "80",
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

print("<br>Actividad 5: <br><br>");
//act 5

foreach($inventario as $x){
    if ($x > array_key_last($inventario)) {
        break;
    }
    $keys = array_keys($inventario);
    print("Titulo: ".$keys[$x]."<br>");
    print("Consola: ".$inventario[$x]["consola"]."<br>");
    print("<br>");
}

print("<br>Actividad 6: <br><br>");
//act 6

foreach($inventario as $x){
    if ($x > array_key_last($inventario)) {
        break;
    }
    if ($inventario[$x]["consola"] == "NES") {
        $inventario[$x]["precio"] = doubleval($inventario[$x]["precio"])-doubleval($inventario[$x]["precio"])*(10/100);
    }
}

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

print("<br>Actividad 7: <br><br>");
//act 7

$busqueda = "Chrono Trigger";
print("Juego buscado: ".$busqueda."<br><br>");

foreach($inventario as $x){
    if ($x > array_key_last($inventario)) {
        break;
    }
    $encontrado = false;
    $keys = array_keys($inventario);
    if ($keys[$x] == $busqueda) {
        $encontrado = true;
        print("Juego encontrado. <br><br>");
        print("Titulo: ".$keys[$x]."<br>");
        print("Consola: ".$inventario[$x]["consola"]."<br>");
        print("Año: ".$inventario[$x]["año"]."<br>");
        print("Precio: ".$inventario[$x]["precio"]."<br>");
        print("Stock: ".$inventario[$x]["stock"]."<br>");
        print("En venta?: ".$inventario[$x]["venta"]."<br>");
        print("<br>"); 
    }
}
if ($encontrado == false) {
    print("Juego no encontrado. <br><br>");
}

print("<br>Actividad 8: <br><br>");
//act 8

$newgame = "Sonic the Hedgehog"; // vos escribirias el juego ingresado.
$keyadd = array_key_last($inventario)+1;
$newgamekey = $keyadd;
$newElements = array(
    $newgame => $newgamekey,
);

$inventario = array_merge($inventario, $newElements);

$añadirconsola = "Sega Genesis"; // vos ingresarias todo esto.
$añadiraño = "1991";
$añadirprecio = "55";
$añadirstock = "5";
$añadirventa = "Si";

$inventario[$keyadd] = [
    "consola" => $añadirconsola,
    "año" => $añadiraño,
    "precio"=> $añadirprecio,
    "stock"=> $añadirstock,
    "venta"=> $añadirventa,
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