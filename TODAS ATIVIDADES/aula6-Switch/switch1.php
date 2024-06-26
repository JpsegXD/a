<?php 
    //switch case;
    $numero = 2; //variavel para teste do switch
    switch($numero){
        case 1:
            echo "O valor de variavel é = ".$numero;
            break;//se não hover o "break". Excecutará todo 
            /////
        case 2:
            echo "O valor é = {$numero}";
            break;
        default: 
            echo"\Se todas falsas está é a saida";
    }


?>