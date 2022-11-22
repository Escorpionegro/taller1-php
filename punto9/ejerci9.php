<?php
$nom = $_POST['nom'];
$asig = $_POST['asig'];
$uno = $_POST['uno'];
$dos = $_POST['dos'];
$tres = $_POST['tres'];

$multiplicacion = ($uno*0.3)+($dos*0.3)+($tres*0.4);

echo $nom;
echo "<br>";
echo $asig;
echo "<br>";

if($multiplicacion>=4.0){
    echo "aprueba";
}
if($multiplicacion<=4.0){
    echo "no aprueba";
}
?>s