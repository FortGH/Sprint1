<?php
$array = array(1,2,3,4,5,6,7,8);
for($i = 0; $i < (count($array)); $i++){
    echo $array[$i];
}
unset($array[5]);
$array = array_values($array);
echo '</br>';
foreach($array as $num){
    echo $num;
}
echo '</br>';
var_dump($array);
?>