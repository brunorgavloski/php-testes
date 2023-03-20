<?php

$notas = [
    [
        'Aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'Aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'Ana' => 'Ana',
        'nota' => 9,

    ],
    //a função de comparação precisa retornar um inteiro
    //menor que, igual a, ou maior que zero. Se o primeiro argumento
    //é considerado menor que, igual a, ou maior que o segundo

    //A função recebe dois elementos do array

];

function ordenarNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}

usort($notas, 'ordenarNotas');
var_dump($notas);