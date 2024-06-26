<?php 
$nome = $_POST['nome'];
$estadocivil = $_POST['estadoCivil'];
switch($estadocivil){
    case '1':
        $estadocivil = "solteiro";
        break;
    case '2':
        $estadocivil = "Casado";
        break;
    case '3':
        $estadocivil = "Divorciado";
        break;
    case '4':
        $estadocivil = "Viúvo";
        break;
    case '5':
        $estadocivil = "União estável";
        break;
        default:
        echo "Opção inválida";
}
    echo "O estado civil do {$nome} é {$estadocivil}.";