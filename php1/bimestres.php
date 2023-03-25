<?php

$notasBimetre1 = [
    'Vinicius' => 6,
    'Joao' => 8,
    'Maria' => 9,
    'Robert' => '12',
    'Beuno' => 2,

];

$notasBimetre2 = [
    'Joao' => 8,
    'Maria' => 9,
    'Robert' => '12',
    'Beuno' => 2,

];


var_dump(array_diff($notasBimetre1, $notasBimetre2));

/*
-> Diferença entre arrays
    Essa função recebe dois argumentos, que são as arrays para tirar 
    diff, exemplo:

    array_diff($array1, $array2);

*/ 