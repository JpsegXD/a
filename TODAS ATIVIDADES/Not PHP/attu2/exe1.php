<?php  // Escreva um procedimento que recebes 3 valores reais X, Y e Z e que verifique se esses valores podem ser os comprimentos dos lados de um triângulo e, neste caso, retornar qual o tipo de triângulo formado. Para que X, Y e Z formem um triângulo é necessário que a seguinte propriedade seja satisfeita: o comprimento de cada lado de um triângulo é menor do que a soma do comprimento dos outros dois lados. O procedimento deve identificar o tipo de triângulo formado observando as seguintes definições:

function tipot($x,$y,$z){
    if(($x + $y > $z) && ($x + $z > $y) && ($z + $y > $x)){
    if($x== $y && $x == $z){echo "Equilatero!";}
    elseif($x == $y || $x ==$z || $y == $z ){echo "Isósceles!";}
    else{echo "Escaleno!";}
}else{echo "Não é triangulo!";}}
$x = 10;
$y = 20;
$z = 30;
tipot($x,$y,$z);
?>