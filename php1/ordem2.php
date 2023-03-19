<?php

$ordem = [
    100,
    233,
    2333,
    1,
    2,
    5454,
    234,
    2,
    65,
    7,
    9

];

$certo = $ordem;

sort($certo);

foreach($certo as $notas) {
    echo "A ordem dos numeros: $notas "  .PHP_EOL;
}

 