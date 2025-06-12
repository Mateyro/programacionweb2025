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
$y=0;

//ACTIVIDAD 3
echo ("<br><br><br>");

//1
foreach($tripulacion as $x){

    $y++;
    echo ("<br> $y. $x");

}

echo ("<br>");

//2 & 3
foreach($tripulacion as $x){
$test = array_search($x, $tripulacion);
echo ("<br> $tripulacion[$test] esta registrado.");
if($test == 7){
    echo (" ¡Tripulante con entrenamiento en gravedad Cero!");
}
}

//ACTIVIDAD 4
echo ("<br><br><br>");

//1
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = ($_POST["name"]);
    $ver = ($_POST["ver"]);
}
function agregarTripulante($nom, &$tripulacion){
    $tripulacion[] = $nom;
    echo $tripulacion[9];
}

echo ("<br>se añadio:<br>");
agregarTripulante ($nom,$tripulacion);
echo ("<br>");

//2
function evacuarTripulante(&$tripulacion) {
    $e = end($tripulacion);
    echo $e;
    $y = -1;
    foreach($tripulacion as $x){
        $y++;
        if ($tripulacion[$y] == $e) {
            unset($tripulacion[$y]);
        }
    }
}
echo ("<br>se removio:<br>");
evacuarTripulante($tripulacion);
echo ("<br><br>nuevo ultimo miembro:<br>");
echo end($tripulacion);

echo ("<br><br>");

//3

function verificarTripulante($ver,&$tripulacion){
    $temp = false;
    $def = false;
    foreach($tripulacion as $x){
        if ($x == $ver) {
            $temp = true;
        }
        if ($temp == true) {
            $def = true;
        }
    }
    if ($def == true) {
        echo ("true");
    }else {
        echo ("false");
    }
}

echo ("Verificacion:<br>");
verificarTripulante($ver,$tripulacion);

echo ("<br>");

//4
function listarTripulacion($tripulacion, $z){
    foreach($tripulacion as $x){
        $z++;
        echo ("<br> $z. $x");
    }
}
$z = 0;
listarTripulacion($tripulacion, $z);

echo ("<br><br><br>");

//Actividad 5

$temperaturas = [12.5, -5.3, 8.7, -23.1, 15.4];

//1
$p = -1;
$end = 100;
foreach($temperaturas as $x){
    $p++;
    if ($temperaturas[$p] < $end) {
        $end = $temperaturas[$p];
    }
}
print($end);
echo ("<br><br>");

//2
$o = -1;
$prom = 0;
foreach($temperaturas as $x){
    $o++;
    $prom = $prom + $temperaturas[$o];
}
$prom = $prom / count($temperaturas);

print($prom);

?>