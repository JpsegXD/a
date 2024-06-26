<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular dias</title>
</head>
<body>
    <form action=""><br><br>
        Digite sua idade (em anos): <input type="text" name="mes"><br><br>
        Digite sua idade (em meses): <input type="text" name="ano"><br><br>
        Digite sua idade (em dias): <input type="text" name="dia"><br><br>
        <input type="submit" value="Calcular">
    </form>    
</body>
</html>

<?php 
$y = $_GET['mes'];
$m = $_GET['ano'];
$d = $_GET['dia'];
$dy = $y * 365;
$dm = $m * 30;
$td = $dy + $dm + $d;
echo "A quantidade de dias vivos é de : {$td}.";

?>