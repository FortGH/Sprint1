<?php
$num = 0;
$array = ["Roma", "Tokio", "Mexico DF", "Munich", "Montreal",
         "Moscu", "Los Angeles", "Seul", "Barcelona", "Atlanta",
         "Sydney", "Atenas", "Pekin", "Londres", "Rio de Janeiro"];
for ($i = 1960; $i <= 2016; $i += 4){
    echo $array[$num] . "  $i </br>";
    $num++;
}
?>