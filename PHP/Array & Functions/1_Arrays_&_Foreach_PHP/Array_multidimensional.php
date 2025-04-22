<?php

$pessoa_1 = [

    "nome" => "Joãozinho",
    "sobrenome" => "Cabrito",
    "idade" => 19

];

$funcionarios = [

    "pessoa_1" => [
        $pessoa_1
    ],

    "pessoa_2" => [
        "nome" => "Peixoto",
        "sobrenome" => "Boi",
        "idade" => 45
    ],

    "pessoa_3" => [
        "nome" => "Pirata",
        "sobrenome" => "Verr",
        "idade" => 63
    ],

];

echo "<pre>";
echo var_dump($funcionarios);

?>