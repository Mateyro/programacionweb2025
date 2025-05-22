<?php
$diasSemana=['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
$dial=0;
$diad=0;

foreach ($diasSemana as $dia){
if( $dia == 'Sabado' || $dia == 'Domingo'){
    echo ($dia." - Dia Descanso <br>");
    $diad = $diad +1;
}else {
    echo ($dia." - Dia Laboral <br>");
    $dial = $dial +1;
}

}
echo ("///////////////////////////// <br> Dias Laborales: $dial <br> Dias de descanso: $diad <br> /////////////////////////////");

//$y = 0;

//$diasSemana=['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

//foreach ($diasSemana as $x){
//if($y > 7){
//    $y = 1;
//}

//$y = $y+1;
//if($y > 5){
//    echo ($x." - Dia Descanso <br>");
//}else {
//    echo ($x." - Dia Laboral <br>");
//}

//}

?>