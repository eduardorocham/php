<?php

$alunos = [
    ['nome' => 'João', 'idade' => 20, 'nota' => 8.5],
    ['nome' => 'Maria', 'idade' => 18, 'nota' => 7.8],
    ['nome' => 'Pedro', 'idade' => 19, 'nota' => 9.2],
    ['nome' => 'Ana', 'idade' => 21, 'nota' => 6.5],
    ['nome' => 'Carlos', 'idade' => 20, 'nota' => 7.0]
];

$maiorNota = 0;
$alunoMaiorNota = null;

foreach ($alunos as $aluno) {
    if ($aluno['nota'] > $maiorNota) {
        $maiorNota = $aluno['nota'];
        $alunoMaiorNota = $aluno;
    }
};

echo "O aluno com maior nota é " . $alunoMaiorNota['nome'] . PHP_EOL;

$nomesAlunos = array_map(function ($aluno) {
    return $aluno['nome'];
}, $alunos);

echo "Alunos: " . implode(', ', $nomesAlunos) . PHP_EOL;

$notas = array_map(function ($aluno) {
    return $aluno['nota'];
}, $alunos);
$mediaNotas = array_sum($notas) / count($notas);

echo "Média: $mediaNotas" .  PHP_EOL;

function ordernarIdades (array $aluno1, array $aluno2) {
    if ($aluno1['idade'] > $aluno2['idade']) {
        return 1;
    };

    if ($aluno2['nota'] > $aluno1['nota']) {
        return -1;
    };

    return 0;
};

usort($alunos, "ordernarIdades");

echo "Alunos ordenados:" . PHP_EOL;
foreach ($alunos as $aluno) {
    echo $aluno['nome'] . '-' . $aluno['idade'] . PHP_EOL;
};

?>