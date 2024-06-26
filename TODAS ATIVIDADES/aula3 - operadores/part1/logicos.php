<?php
// operadores logicos?: E (&&), OU (||) Não (!)

$res = (10 > 5) && (10 == 20);
var_dump($res);
echo "\n";
$res1 = (10 > 5) || (10 == 20);
var_dump($res1);
echo "\n";
$res2 = (10 > 5) && (!(10 == 20));
var_dump($res2);
echo "\n";
$res3 = !(10 == 20);
var_dump($res3);
echo "\n";
$res4 = ((10 <= 5) || (!(10 == 20))) && (5 == 5);
var_dump($res4);

echo "\n";
$res5 = !$res4;
var_dump($res5);

?>