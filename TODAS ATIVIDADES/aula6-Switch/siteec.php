<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado civil!</title>
</head>
<body>
    <form action="dadosec.php" method="post">
    Nome: <input type="text" name="nome">
    <p>Estado civil: </p>
    <select name="estadoCivil">
        <option value="0">Escolha uma opção</option>
        <option value="1">Solteiro</option>
        <option value="2">Casado</option>
        <option value="3">Divorciado</option>
        <option value="4">Viúvo</option>
        <option value="5">União estável</option>
    </select>
    <input type="submit" value="verificar">
    </form>
</body>
</html>