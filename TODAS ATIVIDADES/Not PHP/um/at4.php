<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
</head>
<body>
    <form action=""><br>
        Digite o coeficiente "a" <input type="numero" name="a"><br><br>
        Digite o coeficiente "b" <input type="numero" name="b"><br><br>
        Digite o coeficiente "c" <input type="numero" name="c"><br><br>
        <input type="submit" value="Calcular"><br><br><br><br>
    </form>

</body>
</html><?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

if($a == 0){
    echo "Não e equação de segundo grau.";
}else{
    $delta=((($b)**2)-(4*($a)*($c)));
    if($delta < 0){
        echo " Não existe raiz.";
    }else if($delta == 0){
        $x1= (-($b)+(sqrt($delta)))/(2*$a);
        echo "Raiz única: {$x1}";
    }else{
        $x1= (-($b)+(sqrt($delta)))/(2*$a);
        $x2= (-($b)-(sqrt($delta)))/(2*$a);
        echo "Há duas raizes reais:\n";
        echo "{$x1}<br>";
        echo "{$x2}";
    }
}
?>