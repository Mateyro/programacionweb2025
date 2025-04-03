<?php 
$totalCompra =150;
$umbralDescuento=100;
echo "Monto total de compra: $totalCompra <br>";
if ($totalCompra > $umbralDescuento){
    echo "¡Bien ahi! tu Compra califica para el descuento.";
}else{
    echo "Tu compra no alcanza el umbral de activacion de descuento. Segui comprando para obtener escuentos addicionales.";
}

//El objetivo del php es calcular si la compra del cliente puede recibir descuento
//las variables son el coste de todo lo que ha comprado el cliente, junto al valor que debe de superar para recibir su descuento e ir por encima del umbral.
//cuando el total de lo que cuestan las cosas compradas es mayor que el umbral del descuento.
?>