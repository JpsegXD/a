<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste salárial</title>
</head>
<body>
    <form action="" method="post"><br><br>
        Digite o valor mensal de seu salário: <input type="text" name="salario"><br><br>
        Digite o valor do reajuste : <input type="text" name="reajuste"><p>Exemplo: se 20% digite "20".</p><br><br>
        <input type="submit" value="Calcular"><br><br><br>
    </form>    
</body>
</html>

<?php 
$salario = $_POST['salario'];
$reajuste = $_POST['reajuste'];
$Nsal = $salario + (($salario * $reajuste)/100);
echo "O novo salario é de : {$Nsal}.";
?>