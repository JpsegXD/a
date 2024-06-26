<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor do salário</title>
</head>
<body>
    <form action="" method="post">
        Numero de carros vendidos: <input type="text" name="ncv"><br><br>
        Valor total das vendas: <input type="text" name="vtdv"><br><br>
        Salario fixo: <input type="text" name="sf"><br><br>
        <!-- Comissao fixa por carro: <input type="text" value="cf"> -->
        <input type="submit" value="Calcular"><br><br><br><br>
    </form>
</body>
</html>
<?php /*10. Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês, mais uma >>comissão<< também >>fixa<< para cada carro vendido ~~e~~ mais >>5%<< do valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de carros por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e escreva o salário final do vendedor.*/
$ncv = $_POST['ncv'];
$vtdv = $_POST['vtdv'];
$sf = $_POST['sf'];
//$cf = $_POST['cf'];
$es=($sf+(0.05*$vtdv));
echo "<br><br>Valor total a ser pago é de : {$es}";




?>