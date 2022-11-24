<?php
include "Shape.php";
include "Triangulo.php";
include "Rectangulo.php";

$rectangulo = new Rectangulo(5,10);
echo $rectangulo -> area();

echo '</br>';

$triangulo = new Triangulo(5,10);
echo $triangulo -> area();
?>