<?php
foreach(escondrijo() as $num){
    echo $num . '</br>';
}

function escondrijo($numCuenta = 10) {
    $x = array();
    for ($i = 0;$i <= $numCuenta; $i += 2){
        $x[] = $i;
    }
    return $x;
}
?>