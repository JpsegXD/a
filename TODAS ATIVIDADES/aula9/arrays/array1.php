<?php
// vetor ou array indexado
// declaracao

$numeros = array(10,20,30,40,"Maiana",10.5);
//Metodo 1 (better)
foreach($numeros as $n){
echo "{$n}.\n";
} 
// Metodo 2 (mais longo)
for($i = 0 ; $i < count($numeros); $i++){
    echo "\n $numeros[$i]";
}
//caso queira acessar apenas um valor especifico (ex. o 20)
echo "\n\n{$numeros[1]}"; // why "[1]"? bacause in array start in 0-->n // "$x[n]"
echo "\n{$numeros[3]}";
?>