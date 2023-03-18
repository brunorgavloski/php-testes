<?php

$array = [

    1929 => "Ford Model A Deluxe Roadster",
    1920 => "Rolls Royce Phantom Limousine",
    1928 => "Falcon Knight Roadster",
    1926 => "Packard Twin 6 Roadster",
    1927 => "Willys Overland Whippet 93A",
    1920 => "Nash Touring"
];

foreach($array as $yearCar => $nameCar) {
    echo "O ano do carro é: $yearCar e o seu nome: $nameCar" . PHP_EOL;
}

echo "A quantidade de carros nessa lista é: " .count($array) . PHP_EOL;