<?php
$cap = $_POST['cap'];
if($cap<500){
    $resultado1 = $cap + ($cap*0.2);
    echo "la tasa de interes sera del 2% mensual y el valor total sera de:".$resultado1;
}elseif($cap>=500){
    $resultado2 = $cap + ($cap*0.45);
    echo "la tasa de interes sera del 4.5% mensual y el valor total sera de :".$resultado2;
}elseif($cap<1500){
    $resultado3 = $cap + ($cap*0.45);
    echo"la tasa de interes sera del 4.5% mensual y el valor total sera de:".$resultado3;
}elseif($cap>=1500){
    $resultado4 = $cap + ($cap*0.7);
    echo "la tasa de interes mensualmente sera del 7% y valor total es de:".$resultado4;
}
?>