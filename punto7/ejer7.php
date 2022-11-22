<?php
$apren = $_GET['apren'];
$asig = $_GET['asig'];
$nota = $_GET['nota'];

echo $apren;
echo "<br>";

echo $asig;
echo "<br>";

if($nota<7){
    echo"reprobado";
}
if($nota>7){
    echo "aprobado";
}
?>

