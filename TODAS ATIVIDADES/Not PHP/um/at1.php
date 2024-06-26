<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>Digite o valor da primeira nota:</p><input type="text" name="nota1">
        <p>Digite o valor da segunda nota:</p><input type="text" name="nota2">
        <p>Digite o valor da terceira nota:</p><input type="text" name="nota3">
        <p>Digite o valor peso da primeira nota:</p><input type="text" name="peso1">
        <p>Digite o valor peso da segunda nota:</p><input type="text" name="peso2">
        <p>Digite o valor peso da terceira nota:</p><input type="text" name="peso3"><br><br>
        <input type="submit" value="Verificar"> <br><br><br>    

    </form>
</body>
</html>
<?php
$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3 = $_GET["nota3"];
$peso1 = 1;
$peso2 = 1;
$peso3 = 1;
$peso1 = $_GET["peso1"];
$peso2 = $_GET["peso2"];
$peso3 = $_GET["peso3"];
$result = 0 ;
/*
Digite a primeira nota: <input type="text" name="nota1">;
Digite a segunda nota: <input type="text" name="nota2">;
Digite a terceira nota: <input type="text" name="nota3">;
*//*
echo "{$nota1}";
echo "{$peso1}";*/
$result = ((($nota1*$peso1)+($nota2*$peso2)+($nota3*$peso3))/($peso1+$peso2+$peso3));
echo "A nota do aluno é: {$result} \n";//<br>
if ($result<7) {
    echo "<br>Aluno Reprovado";
} else {
    echo"<br>Aluno Aprovado";
}
?>