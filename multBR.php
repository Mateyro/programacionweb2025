<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Integrado en PHP
    $cantidad = floatval($_POST["pesos"]); //"$_POST["pesos"]" agarra  el valor e pesos de formulario.html
    $moneda = $_POST["tipo"];
    $valorMoneda = [40, 43, 8];
   
    if ($moneda =="USD"){
        $resultado = $cantidad / ;
    } elseif;
    echo ($valor/$div." en ".$type);
}
?>