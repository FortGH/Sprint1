<?php
$string = "Welcome to the jungle";

$array = explode(" ",$string);

$string1 = $array[0] . $array[1] .$array[2] .$array[3];

echo $string1 . '</br>';

$array2 = str_split($string1);
var_dump($array2);
?>