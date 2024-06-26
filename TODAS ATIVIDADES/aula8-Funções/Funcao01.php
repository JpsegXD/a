<?php 
 //definicão da funcão (procedimento)
function soma( $n1 , $n2 ){ // a informação não sai da função
    $res= $n1 + $n2;
    echo "Soma : {$res}.\n";
}
// 2
function sub( $num1 , $num2 ){ // já está tem a saída da informação 
    $res = $num1 - $num2 ;
    return $res;
}
// 3
function calcular( $n1 , $n2 ){
    echo "O resultado da soma é: ";
    soma($n1 , $n2);
    $resSub = sub($n1 , $n2);
    echo "\n Subtração : {$resSub}";
}

// chamada da função 
soma(1,1);
soma(2,2);
$retornoFuncao = sub(5,2);
echo "A subtração é : {$retornoFuncao}.";
calcular(10,4);