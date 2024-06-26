<?php
function calcularEstatisticas($dados) {
    $totalPessoas = count($dados);
    $somaSalarios = 0;
    $somaFilhos = 0;
    $maiorSalario = 0;
    $pessoasAte350 = 0;

    foreach ($dados as $pessoa) {
        $salario = $pessoa['salario'];
        $filhos = $pessoa['filhos'];

        $somaSalarios += $salario;
        $somaFilhos += $filhos;

        if ($salario > $maiorSalario) {
            $maiorSalario = $salario;
        }

        if ($salario <= 350) {
            $pessoasAte350++;
        }
    }

    $mediaSalario = $somaSalarios / $totalPessoas;
    $mediaFilhos = $somaFilhos / $totalPessoas;
    $percentualAte350 = ($pessoasAte350 / $totalPessoas) * 100;

    return [
        'mediaSalario' => $mediaSalario,
        'mediaFilhos' => $mediaFilhos,
        'maiorSalario' => $maiorSalario,
        'percentualAte350' => $percentualAte350
    ];
}

// Exemplo de uso:
$dadosPessoas = [
    ['salario' => 500, 'filhos' => 2],
    ['salario' => 300, 'filhos' => 1],
    // Adicione mais dados conforme necessário
];

$resultado = calcularEstatisticas($dadosPessoas);

echo "Média do salário da população: R$ " . number_format($resultado['mediaSalario'], 2) . "\n";
echo "Média do número de filhos da população: " . number_format($resultado['mediaFilhos'], 1) . "\n";
echo "Maior salário: R$ " . number_format($resultado['maiorSalario'], 2) . "\n";
echo "Percentual de pessoas com salário até R$ 350,00: " . number_format($resultado['percentualAte350'], 1) . "%\n";
?>
