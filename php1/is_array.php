<?php

$notas = [
    'ana' => 10,
    'Joao' => 8,
    'Maria' => 9,
    'Robert' => 12,
    'Beuno' => 2,
];

ksort($notas);

if(is_array($notas)) {

    echo 'sim é array'. PHP_EOL;

}