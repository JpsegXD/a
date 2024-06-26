<?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $soma1 = $num1 + $num2;
    $divisao = $num1 / $num2;
    $multiplicacao = $num1 * $num2;
    $subtracao = $num1 - $num2;
    $modulo = $num2 % $num1; // Resto de uma divisão
    $media = ($num1 + $num2) / 2; // ou "$media = ($soma / 2);

    //echo "A soma destes números é: {$soma1}.";
    echo "<br>A soma do número {$num1} e do número {$num2} é: {$soma1}.";
    echo "<br>A subtação destes números é: {$subtracao}.";
    echo "<br>A multiplicação destes números é: {$multiplicacao}.";
    echo "<br>A divisão destes números é: {$divisao}.";
    echo "<br>O Resto desta divisão é: {$modulo}.";
    echo "<br>A Média do número {$num1} e do número {$num2} é: {$media}.";

