<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor do carro 0Km</title>
</head>
<body>
    <form action="" method="post">
        Custo da fábrica: <input type="text" name="cf">
       <!-- Parcela do distribuidor: <input type="text" name="pd">
        Impostos majoritarios: <input type="text" name="im">-->
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php /*O custo de um carro novo ao consumidor é a soma do custo de fábrica com a
porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%, escrever um algoritmo para ler o custo de fábrica de um carro, calcular e escrever o custo final ao consumidor*/
$custoF = $_POST['cf'];
$pd = 0.28;
$im = 0.45;
$pdccf = ($custoF * $pd) + $custoF;
$tv = ($pdccf*$im) + $pdccf;
echo "<br><br>Valor total a ser pago pelo carro é de : {$tv}";




?>