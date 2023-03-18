# Arrays

### -> Temos duas formas de percorrer um array, uma delas é o foreach. Onde definimos um array como descrito abaixo.
    $array = [
		1 => 'cao',
		2 => 'cavalo',
		3 => 'gato',
		4 => 'pato',
		5 => 'passaro'
	];
    
### ->  Chamamos a função foreach e damos um nome para os itens que estão dentro do array. Nesse exemplo eu listo os indices dentro do array.
    foreach($array as $bichos) {
        echo $bichos . PHP_EOL;
    }

### -> O resultado esperado é o abaixo:
    cao
    cavalo
    gato
    pato
    passaro