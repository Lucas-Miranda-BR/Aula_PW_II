<?php

$aluno = [
    [
        'nome' => 'Mario',
        'nota' => 7
    ],
    [
        'nome' => 'Luigi',
        'nota' => 8
    ]
];

foreach ($aluno as $key => $value) {
    if ($value['nota'] > 7) {
        echo 'O aluno ' . $value['nome'] . ' está reprovado. <br>';
    }
    else {
        echo 'O aluno ' . $value['nome'] . ' está aprovado. <br>';
    }
}

?>