<?php

$etec = [

    [
        "curso" => "Desenvolvimento de Sistemas",
        $DS = [
        "materiapam" => "Programação de Aplicativos Mobile",
        "materiapw" => "Programação Web",
        "materiatpa" => "Técnicas Avançadas de Programação de Algoritmos",
        "materiaing" => "Inglês",

        "modulopam" => "PAM",
        "modulopw" => "PW",
        "moduloing" => "ING"
        ],

        $PAM = [
            "pammodulo1" => "Modulo I",
            "pammodulo2" => "Modulo II"
        ],

        $PW = [
           "pwmodulo1" => "Modulo I",
           "pwmodulo2" => "Modulo II",
           "pwmodulo3" => "Modulo III",
           "pwmodulo4" => "Modulo IV"
        ],

        $ING => [
           "ingmodulo1" => "Modulo I",
           "ingmodulo2" => "Modulo II",
           "ingmodulo3" => "Modulo III"
        ],
        
    ],

    [
        "curso" => "Adminstração",
        $ADM = [
            "materiarh" => "Recursos Humanos",
            "materiagp" => "Gestão de Pessoas",
            "materiatpa" => "Teoria da Adminstração",
            "materiaing" => "Inglês",
            "modulorh" => "RH",
            "moduloing" => "ING"
        ],
        $RH => [
            "rhmodulo1" => "Modulo I",
            "rhmodulo1" => "Modulo II"
        ],
        $ING => [
                "ingmodulo1" => "Modulo I"
        ],
    ],
];

    foreach ($etec as $key => $value) {
        echo "Curso: " . $value['curso'] . "<br>";
        foreach ($DS as $key => $value) {
            echo "Materia PAM: " . $value['materiapam'];
            echo "Materia PW: " . $value['materiapw'];
            echo "Materia TPA: " . $value['materiatpa'];
            echo "Materia ING: " . $value['materiaing'];
        }
            
        }

?>