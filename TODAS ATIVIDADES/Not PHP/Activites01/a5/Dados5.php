<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mercadoria</title>
    </head>
    <body>
        <form action="" method="post"><br><br>
            Digite o custo: <input type="text" name="custo"><br><br>
            Digite o frete: <input type="text" name="frete"><br><br>
            Digite a dispesa: <input type="text" name="pdespesa"><br><br>
            Digite a o valor de venda: <input type="text" name="vvenda"><br><br>
            <input type="submit" value="Verificar"><br><br><br>
        </form>
    </body>
</html>
<?php 
$custo = $_POST['custo'];
$frete = $_POST['frete'];
$pdespesa = $_POST['pdespesa'];
$vvenda = $_POST['vvenda'];
if($frete==null){$frete = 0;}
if($pdespesa = null){$pdespesa;}
$lucro = $vvenda - ($custo + $frete + $pdespesa);
echo "O lucro será de {$lucro}.";
?>