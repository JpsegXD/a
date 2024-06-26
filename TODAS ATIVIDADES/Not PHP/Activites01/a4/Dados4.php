<?php

$dollar1 = $_GET["dollar"];
$reais1 = $_GET["reais"];
$conversao = $dollar1 * $reais1;
echo "O valor da conversão em Dólares é de: {$conversao}";