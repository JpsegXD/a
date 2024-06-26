<?php 

$numero = 5;
$contador = 1;
$resultado;

do{
    $resultado = $numero * $contador; //Sobe para o próximo número da tabuada
    echo "{$numero} x {$contador} = {$resultado}\n";
    $contador++;
}while($contador <= 10);