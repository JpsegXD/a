
<?php 

// calculo de IMC com funções
    function calcularIMC($peso , $altura){
        $imc = ($peso/(pow($altura,2)));
        return $imc;
    }
function situacao($imc){
    if($imc < 16){echo "O Imc é : {$imc}. \nSituação : Abaixo peso.";}
    else if($imc >= 16 && $imc <= 25){echo "O Imc é : {$imc}. \nSituação : Peso normal.";}
    else if($imc >= 25 && $imc <= 29){echo "O Imc é : {$imc}. \nSituação : Acima peso.";}
    else{echo "O Imc é : {$imc}. \nSituação : Muito acima do peso.";}
    // return $situation;
}


    // debugar
    /*
    $teste = calcularIMC(60,1.67);
    echo "{$teste}";
    $situation = situacaoIMC()   number_format($area,2,',','.');
    echo "{$situation}"*/

    /*
    $imc = calcularIMC(150,1.66);
    situacao($imc);*/
    // Pegando as informações do form
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $imc = calcularIMC($peso,$altura);
    situacao($imc);


?>