<?php
$llamada = 10;

echo "El costo de la llamada es de " . 
      coste($llamada) . " centimos";

function coste($llamada){
    $coste = 10;

    if ($llamada <= 3) {
        $coste = $coste;
    }elseif ($llamada > 3) {
       $coste += ($llamada - 3) * 5;
    }
    return $coste;
}
?>