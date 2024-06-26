<?php 
    
    $entrada = 100;

    $contador = 0;

    while($contador <= $entrada){
        echo "{$contador} \n";
        $contador++; // Ou "$contador+=1;"
    }
    $entrada1 = 100;

    $contador1 = 0;                        // Mostra PAR

    while($contador <= $entrada){
        echo "{$contador} \n";
        $contador+=2;
    }
    $entrada2 = 100;

    $contador2 = 1;                        //Mostra ímpar

    while($contador <= $entrada){
        echo "{$contador} \n";
        $contador+=2;
    }

?>