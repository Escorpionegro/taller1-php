<?php

$Estu = $_POST ['Estu'];
$Asig = $_POST ['Asig'];
$num1 = $_POST ['n1'];
$num2 = $_POST ['n2'];
$num3 = $_POST ['n3'];

$promedio = ($num1+$num2+$num3)/3;

echo "el resultado del promedio ".$promedio."<br>";
echo $Estu." ";
echo $Asig." ";
?> 