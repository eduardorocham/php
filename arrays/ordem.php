<?php 

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10
    ],
    [
        'aluno' => 'Viníccius',
        'nota' => 6
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9
    ],
];

function ordenarNotas(array $nota1, array $nota2) : int
{   
    // crescente
    return $nota1['nota'] <=> $nota2['nota'];

    // decrescente
    // return $nota2['nota'] <=> $nota1['nota'];

    // if ($nota1['nota'] > $nota2['nota']) {
    //     return -1;
    // }

    // if ($nota2['nota'] > $nota1['nota']) {
    //     return 1;
    // }

    // return 0;
}

usort($notas, 'ordenarNotas');
var_dump($notas);