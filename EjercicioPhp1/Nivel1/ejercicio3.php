<?php
$numCuenta = 10;
foreach(escondrijo($numCuenta) as $num){
    echo $num . '</br>';
}

function escondrijo($numCuenta) {
    $x = array();
    for ($i = 0;$i <= $numCuenta; $i += 2){
        $x[] = $i;
    }
    return $x;
}
?>