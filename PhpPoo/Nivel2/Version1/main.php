<?php

include "PokerDice.php";

$array;
$contador = 1;

for ($i = 0; $i < 5; $i++) {
    $array[] = new PokerDice(); //crear 5 dados
}

for ($i = 0; $i < 6; $i++) {
    echo "Throw $contador: " . tirarDado($array) . '</br>'; //tirar 5 dados
    $contador++;
}

echo "Total de tiradas: " . getTotalThrows($array) . '</br>';
var_dump($array);

function tirarDado($array){
    $x = mt_rand(0,(count($array) - 1));
    return $array [$x] -> shapeName($array [$x] -> throw());
}

function getTotalThrows($dados) {
    $totalThrows = 0;
    foreach($dados as $dado ){
        $totalThrows += $dado->getThrows();
    }
    return $totalThrows;
}

?>