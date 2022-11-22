<?php
$edad = $_POST['edad'];
$sex = $_POST['sex'];

echo $edad;
echo  "<br>";
echo $sex;
echo "<br>";

if(($sex == "hombre")&&($edad>=63)){
    echo "se puede jubilar";
    }elseif($sex == "mujer"&& ($edad>54)){
        echo"se puede jubilar";
    }else{
        echo "no se puede jubilar";
    }
    ?>