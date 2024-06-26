<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <form action="" ><br><br>
        Qual o nome do aluno: <input type="text" name="nome"><br><br>
        Nota 1:<input type="text" name="nota1"><br><br>
        Nota 2:<input type="text" name="nota2"><br><br>
        Nota 3:<input type="text" name="nota3"><br><br>
        <input type="submit" value="Resultado"><br><br><br>
    </form>
</body>
</html>
<?php 
function calcularMedia($n1, $n2, $n3){
   $ResMedia = ($n1+$n2+$n3)/3;
   return $ResMedia;
}
function situacao($ResMedia){
    if( $ResMedia>=7){ echo "Aluno Aprovado!";}
    elseif($ResMedia<4){echo "Aluno Reprovado!";}
    else{echo "Aluno em Recuperação!";}
}
$n1 = $_GET['nota1']; 
$n2 = $_GET['nota2'];
$n3 = $_GET['nota3'];
$nome = $_GET['nome'];
////////////////////
$ResMedia = calcularMedia($n1, $n2, $n3);
echo "A media do estudante é: {$nome}.<br>";
situacao($ResMedia);

?>