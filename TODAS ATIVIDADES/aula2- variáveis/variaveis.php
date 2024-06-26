<?php
    // declaração de variáveis
    $a;
    $salario = 1350.50;
    $tal;
    $numero;
    $Mname = "Sara Almeida da Silva";
    $Pname = "Carlos";
    $name = "Paulo";
    $age = 22;
    $numeros = array(1.008,2,3,"4","h","patolino");
    $test = true;
    $test1 = false;

    //Há 2* tipos
    echo "\nO nome é: {$name} e o salario é {$salario}";   /* simple, erram menos  */ 
    echo "\nO nome é:" .$name. " e o salario é: ".$salario. "\n";  /* mais propicio a erros */

    echo "\nE o salário é de {$salario}\n\n";
    // impressão ( ... ) é com o var_dump()
    // É usado em "array"

    var_dump($numeros);  // + detalhes

    echo '<pre>';
    print_r($numeros); // - detalhes
    
    var_dump($test);
    var_dump($test1);
?>