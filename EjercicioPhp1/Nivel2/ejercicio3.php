<?php
$chocolate = 1;
$chiclo = 0.5;
$caramelo = 1.5;

echo "Total de la compra: " . 
choco($chocolate,3) + chic($chiclo, 1) + cara($caramelo, 2) . "€";

function choco($chocolate, $cantidad){
    return $chocolate * $cantidad;
}
function chic($chiclo, $cantidad){
    return $chiclo * $cantidad;
}
function cara($caramelo, $cantidad){
    return $caramelo * $cantidad;
}
?>