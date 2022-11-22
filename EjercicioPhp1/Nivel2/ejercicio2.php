<?php
$llamada = 5;

echo "El costo de la llamada es de " . 
      coste($llamada) . " centimos";

function coste($llamada){
    $coste = 10;

    if ($llamada <= 3) {
        $coste = $coste;
    }elseif ($llamada > 3) {
        for($i = 3; $i < $llamada; $i ++) {
            $coste += 5; 
        }
    }
    return $coste;
}
?>