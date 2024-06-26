<?php
    // recebe dados do formulario e guarda na memoria

    $nome = $_GET["nome"];         //casos queira deixar os dados ocultos da URL usar "$_POST"
    $numero1 = $_GET["numero1"];   // Lembras de colocar o "$_GET" e o "$_POST" maiusculos
    $numero2 = $_GET["numero2"];
    $soma = $numero1 + $numero2;

    echo "Hello Sr. ".$nome;
    echo "<br>Seu primeiro numero é: ".$numero1;
    echo "<br>Your second number is: ".$numero2;
    echo "<br>A soma detes numeros é: ".$soma;
?>