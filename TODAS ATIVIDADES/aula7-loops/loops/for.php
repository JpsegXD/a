<?php  // i did this alone '^'

$numero = 1;
$contador = 0;
$resultado;
for($numero=0;$numero<=10 ; $numero++ ){
    for($contador=0;$contador<=10 ; $contador++ ){
        $resultado = $numero * $contador; //Sobe para o próximo número da tabuada
        echo "{$numero} x {$contador} = {$resultado}\n";
  
}
  
}
