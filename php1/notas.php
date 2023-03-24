<?php

$notas = [
    'ana' => null,
    'Joao' => 8,
    'Maria' => 9,
    'Robert' => '12',
    'Beuno' => 2,

];


ksort($notas);

var_dump($notas);

if (gettype($notas) == 'array') {
    echo 'sim, é array' .PHP_EOL;
}

//var_dump(array_key_exists('Joao', $notas));
//var_dump(isset($notas['Jose'])); //restorna false pois não existe no array 
//var_dump(isset($notas['ana'])); // retorna false pois o valor associado é null
//var_dump(isset($notas['Maria'])); //retorna true pois existe o valor e com uma associação

//echo 'Alguem tirou 12?' . PHP_EOL;
//var_dump(in_array(12, $notas)); //retorna true
//var_dump(in_array(12, $notas, true)); //retorna false pois estamos usando o strict

echo 'Alguem tirou 8' . PHP_EOL;
echo array_search(8, $notas) . PHP_EOL; //procra dentro do array pelo valor da chave

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

-> array_key_exists(); verifica se a chave existe
-> in_array(); verifica se o valor existe.
-> isset(); verifica se chave existe e não é nula;

-> Podemos imaginar essa situação:
    var_dump(in_array(12, $notas));
    Em determinado momento esse array retornou para nos com o valor 12 em formato de 
    string, sendo '12', no caso, entre aspas. Executando podeviamos ver que recebemos um true nessa
    verificação. Por baixo dos panos o php faz a seguinte comparação:

        12 == '12'

    Assumindo de forma inteligente que os dois são iguais.
    Caso, não queiramos que isso ocorra podemos usar o stict, na forma a seguir:

        var_dump(in_array(12, $notas, true));
    
    Nesse caso retornará o valor false pois estamos fazendo a comparação exata 
    por assim dizer
    
    Podemos também fazer buscar pelo valor do item usando no caso a cima o valor 8
    que é referencia de Joao. Para isso usamos a função:

        echo 'Alguem tirou 8' . PHP_EOL;
        echo array_search(8, $notas);
        
*/