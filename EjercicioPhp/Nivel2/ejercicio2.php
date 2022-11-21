<?php
$string = "IT Academy";
$string1 = "";
$x = "";
$y = "";
if (strlen($string) > 1){
    $y = $string[strlen($string) - 1];
    $x = $string[0];
    $string[0] = $y;
    $string[strlen($string) - 1] = $x;
}else {
    $resp = "La cadena es muy corta";
}
echo $string;
?>