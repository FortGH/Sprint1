<?php
foreach(escondrijo() as $num){
    echo $num . '</br>';
}

function escondrijo() {
    $x = array();
    for ($i = 0;$i <= 10; $i += 2){
        $x[] = $i;
    }
    return $x;
}
?>