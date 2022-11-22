<?php

$h1 = $_POST['h1'];
$h2 = $_POST['h2'];
$resta = $h1-$h2;

echo "la diferencia de edades es". $resta;
echo "<br>";
if($h1>$h2){
    if($h1>$h2){
        echo $h1." es mayor que " .$h2;
  }else{
    echo $h2." es menor que " .$h1;
  }
}
?>


