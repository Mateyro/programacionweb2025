<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Integrado en PHP
    $edadEnv = intval($_POST["edad"]); //"$_POST["pesos"]" agarra  el valor e pesos de formulario.html
    $edadMin =11;
    $edadMax =19;
    $dato;
    if($edadEnv>$edadMin && $edadEnv<$edadMax){
        echo "Eres elejible para el descuento";
    } else{
        echo "No eres elejible para el descuento";
    }
}
?>