<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Integrado en PHP
    $cantidadPesos = floatval($_POST["pesos"]); //"$_POST["pesos"]" agarra  el valor e pesos de formulario.html
    $valorDolar = 40; //Ejemplo, 40 es un default eso es todo.
    $cantidadTotalDolares = $cantidadPesos / $valorDolar;
    echo "Resultado de la conversion: ";
    echo $cantidadPesos . " pesos uruguayons equivalen a " . $cantidadTotalDolares. " dolares";
}else {
    echo "Error en la solicitud";
}
?>