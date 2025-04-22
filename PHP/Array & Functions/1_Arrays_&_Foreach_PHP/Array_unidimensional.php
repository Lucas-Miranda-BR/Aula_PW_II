<?php

$frutas = [];

// Pode utilizar letras

$frutas[0] = "Pera";
$frutas[1] = "Banana";
$frutas[2] = "Morango";
$frutas[3] = "Uva";

$num = 2; // Valor posicição

// Exibir todas as posições

echo "Array inteira";
echo "<pre>";
echo var_dump($frutas);

echo "<pre>";
// Exibir uma unica posição

echo "Posiçao de valor: " . $num;
echo "<pre>";
echo var_dump($frutas[$num]);

?>