<?php 

$sp = [
    "name" => "São Paulo",
    'valor' => 67836.43,
    'porcentagem' => 0.0
    ];

$rj = [
    "name" => "Rio de Janeiro",
    'valor' => 36678.66,
    'porcentagem' => 0.0
    ];

$mg = [
    "name" => "Minas Gerais",
    'valor' => 29229.88,
    'porcentagem' => 0.0
    ];
$es = [
    "name" => "Espírito Santo",
    'valor' => 27165.48,
    'porcentagem' => 0.0
    ];

$outros = [
    "name" => "Outros",
    'valor' => 19849.53,
    'porcentagem' => 0.0
    ];

$faturamentos = [$sp, $rj, $mg, $es, $outros];

$totais = $sp['valor'] + $rj['valor'] + $mg['valor'] + $es['valor'] + $outros['valor'];

foreach ($faturamentos as $fator) {
    $fator['porcentagem'] = ($fator['valor']*100)/$totais;
    echo $fator['name'].': '. $fator['porcentagem'] . '%'. "<br>";
}
?>