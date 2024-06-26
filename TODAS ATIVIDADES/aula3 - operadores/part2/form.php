<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="recebeDados.php" method="get"> <!--No lugar do "get" pode ser "post" a fim de esconder uma senha da URL (encapsular)-->
        <br>
        Nome: <input type="text" name="nome"><br><br>
        Entre com o primeiro número: <input type="text" name="numero1"><br><br>
        Entre com o segundo número: <input type="text" name="numero2"><br>
        <input type="submit" value="enviar">

    </form>

</body>
</html>