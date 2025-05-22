<?php

//1
$tripulacion = ['Alex Rider', 'Mia Kovalik', 'Raj Patel', 'Elena Vega', 'Jules Bergman'];
$ttrabajo = ['Comandante', 'Ingeniera', 'Medico', 'Piloto', 'Cientifico'];

//2
echo (" La tercera posicion de la tripulacion es: ".$tripulacion[2]);

//3
$tripulacion[1] = 'Nadia Petrov';

//4
$tripulacion[] = 'Sam Carter';
$tripulacion[] = 'Leo Wu';
$tripulacion[] = 'Zara Khan';

echo ("<br> Segunda posicion en la tripulacion: $tripulacion[1] <br> Nuevos Integrantes: $tripulacion[5], $tripulacion[6], $tripulacion[7] <br> <br> Tripulacion Entera: <br>");

foreach ($tripulacion as $x){
echo ("<br> $x");
}

//ACTIVIDAD 2
echo ("<br><br><br>");

//1
unset($tripulacion[0]);

//2
array_unshift($tripulacion, "Dmitri Volkov", "Yuki Tanaka");

$y=0;

//3
foreach($tripulacion as $x){

    $y++;

}
echo ("Cantidad de miembros en la tripulacion despues de los especialistas: $y");

?>
