<?php

$alunos = [
    [
        "nome" => "Pedrizino Albeque",
        "rm" => 14022015,
        "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKdy8RKfLAbr3X5ftXykvwEzYYdc7BqATpig&s",
        "telefone" => 11119999999
    ],

    [
        "nome" => "Mariazinha Florzita",
        "rm" => 22082020,
        "foto" => "https://img.freepik.com/psd-gratuitas/retrato-de-estudio-de-uma-jovem-estudante-adolescente_23-2150162514.jpg",
        "telefone" => 1111877280321

    ],

    [
        "nome" => "Roberto da Esquina",
        "rm" => 11022011,
        "foto" => "https://static.vecteezy.com/system/resources/thumbnails/024/724/631/small/a-happy-smiling-young-college-student-with-a-book-in-hand-isolated-on-a-transparent-background-generative-ai-free-png.png",
        "telefone" => 11116215941
    ],

    [
        "nome" => "Albertinho Mato",
        "rm" => 20122025,
        "foto" => "https://www.pngarts.com/files/7/Male-College-Student-PNG-Image-Background.png",
        "telefone" =>11113872176
    ],

];

foreach ($alunos as $key => $value) {
    echo 'Nome de aluno: ' . $value['nome'] . '<br>';
    echo 'Matricula de número: ' . $value['rm'] . '<br>';
    echo 'Foto de aluno: <img src="' . $value['foto'] . '"> <br>';
    echo 'Telefone de aluno: ' . $value['telefone'] . '<br>';
    echo '<hr>';
}

?>