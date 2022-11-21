<?php
$edad = 21;

echo miEdad($edad);

function miEdad($edad) {
    $resp = "";
    if ($edad % 2 == 0){
        $resp = "Tu edad es PAR";
    }else {
        $resp = "Tu edad es IMPAR";
    }
    return $resp;
}
?>