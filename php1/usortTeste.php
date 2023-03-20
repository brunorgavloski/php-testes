<?php

$array = [
    [
        'nome' => 'Pedro',
        'ordem' => 4
    ],
    [
        'nome' => 'Joao',
        'ordem' => 1000
    ],
    [
        'nome' => 'Felipe',
        'ordem' => 3
    ],
    [
        'nome' => 'maicon',
        'ordem' => 20
    ],
    [
        'nome' => 'Kah',
        'ordem' => 2
    ],
    [
        'nome' => 'Beh',
        'ordem' => 10
    ],
    [
        'nome' => 'Juana',
        'ordem' => 5
    ],
    [
        'nome' => 'Jao',
        'ordem' => 1
    ],
];

function ordenarNomes(array $ordem1, array $ordem2):int
{
    if ($ordem1['ordem'] > $ordem2['ordem']) {
        return -1;
    }

    if($ordem1['ordem'] < $ordem2['ordem'] ) {
        return 1;
    }

    return 0;
}

usort($array, 'ordenarNomes');
var_dump($array);
