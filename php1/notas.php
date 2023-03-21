<?php

$notas = [
    'ana' => 10,
    'Joao' => 8,
    'Maria' => 9,
    'Robert' => 12,
    'Beuno' => 2,

];


ksort($notas);

var_dump($notas);

if (gettype($notas) == 'array') {
    echo 'sim, é array' .PHP_EOL;
}