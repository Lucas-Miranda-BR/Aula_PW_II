<?php

$pessoa = [
    [
        'nome' => 'Martinho da Silveira',
        'idade' => 14
    ],

    [
        'nome' => 'Fabio Sabio',
        'idade' => 87
    ],
    [
        'nome' => 'Orlando Peixe',
        'idade' => 29
    ],
]

    foreach ($pessoa as $key => $value) {
        if ($value['idade'] > 70) {
            echo 'A pessoa' . $value['nome'] . 'Possui um poder de voto opicional <br>';
        }
        if ($value['idade'] >= 18 && $value['idade'] < 70) {
            echo 'A pessoa' . $value['nome'] . 'Possui um poder de voto obrigatorio <br>';
        }
        if ($value['idade'] >= 16 && $value['idades'] < 18) {
            echo 'A pessoa' . $value['nome'] . 'Possui um poder de voto opicional <br>';
        }
    }

?>