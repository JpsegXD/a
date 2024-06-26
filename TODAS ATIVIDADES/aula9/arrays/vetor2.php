<?php 
// matriz - array associativo
$dados = array(               // cama de campo(ex. ["nome"] & ["Idade"])
        array("Nome" => "João", "Idade" => 10),
        array("Nome" => "Lucas", "Idade" => 20),
        array("Nome" => "Jaciara", "Idade" => 50),
        array("Nome" => "Ana", "Idade" => 2),
    );
    foreach($dados as $d){
        //echo "$d['nome']";
        echo "\nNome: ".$d['Nome']. "\tIdade:  ".$d['Idade'];
    }
?>