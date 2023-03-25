<?php

$notasBimetre1 = [
    'Vinicius' => 6,
    'Joao' => 8,
    'Maria' => 9,
    'Robert' => '12',
    'Beuno' => 2,
    'Bruno' => 100,
];

$notasBimetre2 = [
    'Vinicius' => 6,
    'Joao' => 8,
    'Maria' => 9,
    'Robert' => '12',
    'Beuno' => 2,
    'uno' => 100,
    
];

$notasBimetre3 = [
    
    'Joao' => 8,
    'Maria' => 9,
    'Robert' => '12',
    'Beuno' => 2,
    

];


//var_dump(array_diff($notasBimetre1, $notasBimetre2));
var_dump(array_diff_key($notasBimetre1, $notasBimetre2));
/*
-> Diferença entre arrays
    Essa função recebe dois argumentos, que são as arrays para tirar 
    diff, exemplo:

        array_diff($array1, $array2);

    Porem, retorna um novo array contendo o elemento RESULTADO diferença, ou seja, caso
    venha existir outro nome com o memso valor, mesmo que o item não exista, apenas o mesmo
    valor será o suficiente para que tirar a difença falhe. Resumindo: Caso exista o nome pedro => 100
    e o nome maria => 100 essa função retornara zero;

        array(1) {
        ["Vinicius"]=>
        int(6)
        }
-> Diferença entre arrays usando a chave *left side*, essa nova função retorna com base na chave,
    ou seja, com base nas arrays com nome, é necessário que existam os nomes para que a comparação
    retorna a resposta desejada ou no exemplo acima, caso exista o nome pedro no array 1 e esse nome
    não exista no array2, a diff é retorna true para esse nome.
            
        array_diff_key();
    
    Exemplo: Suponha no array1 a não existencia do nome Bruno, qual existe no array2. Esse nome sera retornado
    com a função independente do valor que possui do lado direito.


*/      
