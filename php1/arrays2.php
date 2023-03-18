<?php
	
$array = [
	1 => 'cao',
	2 => 'cavalo',
	3 => 'gato',
	4 => 'pato',
	5 => 'passaro',
    6 =>  'tartaruga'
];

foreach($array as $nomes => $bichos) {
	echo "$nomes dos bichos é $bichos" . PHP_EOL;
}

echo "Total de índices: " . count($array) . PHP_EOL;



//Nessa estrutura de dados o php já 'sabe o tamanho dessa array, logo
//seria errado criar um contador para descobrir quandos elementos
//existem dentro da mesma; Para isso basta usar a função caunt;