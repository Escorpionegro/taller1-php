<?php

$vol = $_POST['vol'];
$pos = $_POST['pos'];
$tdepres = $_POST['tdepres'];

echo "total de los volantes: " .$vol*2000;
echo "<br>";
echo "total de los posters: " .$pos*5000;
echo "<br>";
echo "total de los tdepres: " .$tdepres*500;
echo "<br>";

$suma = ($vol*2000)+($pos*5000)+($tdepres*500);

echo "el pago total es" .$suma;

?>
