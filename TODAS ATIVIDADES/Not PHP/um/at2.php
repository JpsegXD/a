<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aposentadoria</title>
</head>
<body>
<form action="" >
    <br><br>
    Digite a sua idade: <input type="text" name="idade">
    <br><br>
    Digite a seu tempo de trabalho registrado como CLT: <input type="text" name="ttrabalho"><br><br>
    <input type="submit" value="Enviar" ><br><br>
</form>
</body>
</html>
<?php
$age = $_GET["idade"];
$twork = $_GET["ttrabalho"];
if ( $age>=65 || $twork>=30 || $age >= 60 && $twork >= 25) {
    echo "Aposentadoria Aprovada";
  
} else {
    echo "Aposentadoria Reprovada";
}
