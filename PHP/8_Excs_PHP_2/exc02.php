<?php

    $zoologico = [
        
        [

            "nome" => "Inx",
            "raca" => "Angora Turco",
            "especie" => "Felidae",
            "cor" => "Combinação de cinza, preto e branco",
            "peso" => "3.2 kg",
            "idade" => "5 anos",
            "foto" => "https://www.petz.com.br/blog/wp-content/uploads/2020/01/como-saber-se-o-gato-e-femea-felina.jpg"

        ],
        [
            "nome" => "Ann",
            "raca" => "Vulpes lagopus",
            "especie" => "Canidae",
            "cor" => "Branco",
            "peso" => "2.8 kg",
            "idade" => "7 anos",
            "foto" => "https://artikus.com.br/wordpress/wp-content/files/artikus.com.br/2024/03/artikus-raposa-do-artico-2.jpg"
        ],

        [
            "nome" => "Cabalito",
            "raca" => "Equus ferus caballus",
            "especie" => "Equinos",
            "cor" => "Branco",
            "peso" => "360 kg",
            "idade" => "17",
            "foto" => "https://preview.redd.it/u3pykitb8gqa1.jpg?auto=webp&s=8fce5a070b84e14d78d5a763dbf7fc4b36ffa4c0"

        ],

        [

            "nome" => "Angelica",
            "raca" => "Canis lupus familiaris",
            "especie" => "Canidae",
            "cor" => "Marrom",
            "peso" => "29 kg",
            "idade" => "11",
            "foto" => "https://www.petz.com.br/blog/wp-content/uploads/2021/02/tosa-de-poodle-3.jpg"

        ],
        
        [

            "nome" => "Douradinho",
            "raca" => "Salminus brasiliensis",
            "especie" => "Cyprinidae",
            "cor" => "Dourado",
            "peso" => "21 kg",
            "idade" => "7",
            "foto" => "https://upload.wikimedia.org/wikipedia/commons/1/1a/Dourado%28Salminus_brasiliensis%29emBonito.jpg"

        ],

    ];

    foreach ($zoologico as $key => $value) {
        echo 'Nome do animal: ' . $value['nome'] . '<br>';
        echo 'Raça do animal: ' . $value['raca'] . '<br>';
        echo 'Especie do animal: ' . $value['especie'] . '<br>';
        echo 'Cor do animal: ' . $value['cor'] . '<br>';
        echo 'Peso do animal: ' . $value['peso'] . '<br>';
        echo 'Idade do animal: ' . $value['idade'] . '<br>';
        echo 'Foto do animal: <img src="'  . $value['foto'] . '"> <br>';
        echo '<hr>';

    }

?>