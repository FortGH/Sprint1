<?php
include "Employee.php";

$empleado = new Employee();
$empleado -> inicializar("Pedro",7000);
echo $empleado -> print();
?>