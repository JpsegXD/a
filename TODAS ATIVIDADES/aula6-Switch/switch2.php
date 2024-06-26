<?php 

$number = $_POST['number'];
switch($number){
    case 1:
        echo "O dia selecionado corresponde a domingo.";
        break;
    case 2: 
        echo "O dia selecionado corresponde a segunda.";
        break;
    case 3:
        echo "O dia selecionado corresponde a terça.";
        break;
    case 4:
        echo "O dia selecionado corresponde a quarta.";
        break;
    case 5:
        echo "O dia selecionado corresponde a quinta.";
        break;
    case 6:
        echo "O dia selecionado corresponde a sexta.";
        break;
    case 7:
        echo "O dia selecionado corresponde a sabado.";
        break;
    default:
        echo "Opção invalida.";
       // echo "O numero digitado não é correspondente.";
}
