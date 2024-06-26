<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área da circunferência!</title>
</head>
<body>
    <form action="" method="get">
    Digite o raio da circunferencia: <input type="text" name="raio">
    <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php 
$raio = $_GET["raio"];
$pi = 3.14159265359;
$area = $pi * ($raio*$raio);
$volume = 4/3 * $pi *($raio**3);
$area=number_format($area,2,',','.');
$volume=number_format($volume,2,',','.');
echo "A área desta circunferencia é de: ".$area.".<br>";
echo "O volume desta esfera é de: ".$volume.".";
?>