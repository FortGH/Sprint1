<?php
$nota = mt_rand(0,100);
echo $nota . '</br>';
echo verificacion($nota);

function verificacion($nota){
    $resp = "";
    if ($nota > 59) {
        $resp = "Primera Division";
    }else if ($nota > 44) {
        $resp = "Segunda Division";
    }else if ($nota > 32) {
        $resp = "Tercera Division";
    }else {
        $resp = "Reprobado";
    }
    return $resp;
}
?>