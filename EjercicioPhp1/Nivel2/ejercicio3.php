<?php
echo "Total de la compra: " . 
chocolate(3) + chiclo(1) + caramelo(2) . "€";

function chocolate($cantidad){
    $chocolate = 1;
    return $chocolate * $cantidad;
}
function chiclo($cantidad){
    $chiclo = 0.5;
    return $chiclo * $cantidad;
}
function caramelo($cantidad){
    $caramelo = 1.5;
    return $caramelo * $cantidad;
}
?>