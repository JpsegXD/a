<?php  //3. Faça um programa que leia um número inteiro N e depois imprima os N primeiros números naturais ímpares (sem usar comando condicional).  [20 primeiros odd]

$n = 20;
$impar;

for($i=0 ; $i<$n ; $i++){
    $impar = ( 2 * $i + 1 );
    echo "{$impar}\n";
    
}

?>