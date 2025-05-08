<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Integrado en PHP
    $valor = floatval($_POST["pesos"]); //"$_POST["pesos"]" agarra  el valor e pesos de formulario.html
    $tipoMoneda = strval($_POST["tipo"]);
    $div;
    switch ($tipoMoneda){
        case "USD": $div = 40.0;
        case "EUR": $div = 43.0;
        case "BRL": $div = 8.0;
    }
    echo ($valor/$div);
}
?>