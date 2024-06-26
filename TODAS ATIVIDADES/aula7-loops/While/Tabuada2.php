<?php 

$numero = 2;
$contador = 1;
$resultado;

while($contador <= 10){
    $resultado = $numero * $contador; //Sobe para o próximo número da tabuada
    echo "{$numero} x {$contador} = {$resultado}\n";
    $contador++;
}