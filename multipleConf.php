<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Integrado en PHP
    $valor = floatval($_POST["pesos"]); //"$_POST["pesos"]" agarra  el valor e pesos de formulario.html
    $tipoMoneda = $_POST["tipo"];
    $div;
    switch ($tipoMoneda){
        case "USD": $div = 40.00;
                    $type = "USD";
                    break;
        case "EUR": $div = 43.00;
                    $type = "EUR";
                    break;
        case "BRL": $div = 8.00;
                    $type = "BRL";
                    break;
    }
    var_dump($type);
}
?>