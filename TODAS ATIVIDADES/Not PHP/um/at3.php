<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste Salárial!</title>
</head>
<body>
    <form action=""><br><br>
        Digite seu salário: <input type="text" name="salario"><br><br>
        Digite há quantos anos você trabalha nesta empresa: <input type="text" name="ywork"><br><br><br>
        <input type="submit" value="Realizar calculo">
    </form>
    
</body>
</html><?php
$salario1 = $_GET["salario"];
$twork =  $_GET["ywork"];
$reajuste = 0;
$bonus = 0;
if($salario1<=500 ){
    $reajuste = ($salario1+$salario1*25/100);
}else if($salario1<=1000){
    $reajuste = ($salario1+$salario1*20/100);
}else if($salario1<=1500){
    $reajuste = ($salario1+$salario1*15/100);
}else if($salario1<=2000){
    $reajuste = ($salario1+$salario1*10/100);
}else {
    $reajuste = $salario1;
}
/////////////////////////////////////////////
if($twork <= 1){
    $bonus = 0;
}else if($twork<=3){
    $bonus = 100;
}else if($twork<=6){
    $bonus = 200;
}else if($twork<=10){
    $bonus = 300;
}else{
    $bonus = 500;
}
echo "Seu novo salario é de: {$reajuste}<br><br>";
echo "Seu bonus é de: {$bonus}";
?>