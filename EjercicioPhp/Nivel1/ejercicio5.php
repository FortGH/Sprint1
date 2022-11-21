<?php
$array = array(5,7,9,4,2);
$array1 = array(1,3,6);
$array1[] = 8;
$array2 = array_merge($array, $array1);
echo count($array2);
echo '<pre>';
var_dump($array2);
echo '</pre>';

foreach ($array2 as $key => $value) {
    echo $value . '</br>';
}
?>