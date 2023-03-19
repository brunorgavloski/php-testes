<?php

$array = [
    1 => '11',
    2 => '26',
    3 => '33',
    4 => '45',
    5 => '25',
    6 => '62',
    7 => '70',
    8 => '83',
    9 => '90',
    10 => '10',
    11 => '11',
    12 => '23'
];

    $notasOrdenadas = $array;

    sort($notasOrdenadas);

    foreach($notasOrdenadas as $alunos => $ordem) {
        echo "as notas ordenadasdos do aluno: $alunos na ordem: $ordem " . PHP_EOL;
    }


    //var_dump($notasOrdenadas);