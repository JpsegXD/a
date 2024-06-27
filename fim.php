<?php 
//dados das pessoas da cidade
$dados = [
         ['salario' => 2300, 'filhos' => 2],
         ['salario' =>  200, 'filhos' => 3],
         ['salario' => 2000, 'filhos' => 1],
         ['salario' =>  320, 'filhos' => 4], 
         ['salario' => 1500, 'filhos' => 2], 
         ['salario' => 1600, 'filhos' => 3],
         ['salario' =>  350, 'filhos' => 2],
         ['salario' => 1200, 'filhos' => 1],
         ['salario' =>  345, 'filhos' => 3]
];
//funcao
function estastistica($dados){
    $somaSalario = 0;
    $somaFilhos = 0;
    $totalPesssoas = count($dados);
    $maiorSalario = 0;
    $salarioAte350 = 0;
    foreach($dados as $p){
        $salario = $p['salario'];
        $filhos = $p['filhos'];

        $somaSalario += $salario;
        $somaFilhos  += $filhos;
        
        if($salario > $maiorSalario){
            $maiorSalario = $salario;
        }
        if($salario <= 350){
            $salarioAte350++;
        }
    }
    $mediaSalario = $somaSalario/$totalPesssoas;
    $meidaFilhos = $somaFilhos/$totalPesssoas;
    $porcemtagemSalario350 = ($salarioAte350/$totalPesssoas)*100;
 
    echo "Media do salario da população: R$" .number_format($mediaSalario,2)."\n";
    echo "Maior salario: R$" .number_format($maiorSalario,2)."\n";
    echo "Meida numero filhos: " .number_format($meidaFilhos)."\n";
    echo "Porcentagem de pessoas com salario até R$350,00: ".number_format($porcemtagemSalario350)."%";
    
}
//chmar funcao
estastistica($dados)

?>