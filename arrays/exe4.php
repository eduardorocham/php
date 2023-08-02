<?php

$alunos = [
    ['nome' => 'João', 'idade' => 20, 'nota1' => 10, 'nota2' => 9.5, 'nota3' => 9.2],
    ['nome' => 'Maria', 'idade' => 18, 'nota1' => 7.8, 'nota2' => 6.5, 'nota3' => 8.9],
    ['nome' => 'Pedro', 'idade' => 19, 'nota1' => 9.2, 'nota2' => 8.7, 'nota3' => 7.4],
    ['nome' => 'Ana', 'idade' => 21, 'nota1' => 6.5, 'nota2' => 7.2, 'nota3' => 8.0],
    ['nome' => 'Carlos', 'idade' => 20, 'nota1' => 7.0, 'nota2' => 6.8, 'nota3' => 7.5]
];

$alunosComMediaFinal = array_map(function ($aluno) {
    return ['nome' => $aluno['nome'], 'idade' => $aluno['idade'], 
        'mediaFinal' => number_format((($aluno['nota1']+$aluno['nota2']+$aluno['nota3']) / 3), 2)
    ];
}, $alunos);

function ordenarNotas (array $aluno1, array $aluno2) {
    if ($aluno1['mediaFinal'] > $aluno2['mediaFinal']) {
        return -1;
    }

    if ($aluno2['mediaFinal'] > $aluno1['mediaFinal']) {
        return 1;
    }

    return 0;
}

usort($alunosComMediaFinal, "ordenarNotas");

foreach ($alunosComMediaFinal as $aluno) {
    echo $aluno['nome'] . ' - ' . $aluno['mediaFinal'] . PHP_EOL;
}

foreach ($alunosComMediaFinal as $aluno) {
    if ($aluno['mediaFinal'] > 9) {
        echo $aluno['nome'] . ' obteve média superior a 9!';
    };
};

?>