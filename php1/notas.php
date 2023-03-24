<?php

$notas = [
    'ana' => null,
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

//var_dump(array_key_exists('Joao', $notas));
//var_dump(isset($notas['Jose'])); //restorna false pois não existe no array 
var_dump(isset($notas['ana'])); // retorna false pois o valor associado é null
var_dump(isset($notas['Maria'])); //retorna true pois existe o valor e com uma associação

/* 
-> verfica se João fez a prova com  a função abaixo
-> a mesma espera dois paramentos, o nome que sera buscando e o array
-> array_key_exists('Joao', $notas);
-> por baixo o que acontece é que a função acessa o array e verifica se esse nome
->esta presente
-> Nesse caso esperamos receber um boolean true
-> Quando o array vem de outro lugar não temos tanto controle para manipulação
-> Em caso de um valor null, onde precisamos verificar se o parametro existe
->e o valor é diferente de nulo existe outra opção de função
*/