<?php

$etec = [

        [
        "curso" => "Desenvolvimento de Sistemas",
        ],

        $ds = [
        "materiapam" => "Programação de Aplicativos Mobile",
        "materiapw" => "Programação Web",
        "materiatpa" => "Técnicas Avançadas de Programação de Algoritmos",
        "materiaingds" => "Inglês",

        "pammodulo1" => "Modulo I",
        "pammodulo2" => "Modulo II",

        "pwmodulo1" => "Modulo I",
        "pwmodulo2" => "Modulo II",
        "pwmodulo3" => "Modulo III",
        "pwmodulo4" => "Modulo IV",

        "ingmodulo_ds1" => "Modulo I",
        "ingmodulo_ds2" => "Modulo II",
        "ingmodulo_ds3" => "Modulo III"
        ],

        [
        "curso" => "Adminstração"
        ],

        $adm = [
            "materiarh" => "Recursos Humanos",
            "materiagp" => "Gestão de Pessoas",
            "materiatda" => "Teoria da Adminstração",
            "materiaingadm" => "Inglês",

            "rhmodulo1" => "Modulo I",
            "rhmodulo1" => "Modulo II",

            "ingmodulo_adm1" => "Modulo I"
        ]
        ];

    foreach ($etec as $key => $value) {
        echo "Curso: " . $value['curso'] . "<br>";

        foreach ($ds as $key => $value) {
            echo "Materia PAM: " . $value['materiapam'] . "Possui 2 modulos. <br>";
            echo "Materia PW: " . $value['materiapw'] . "Possui 4 modulos. <br>";
            echo "Materia TPA: " . $value['materiatpa'] . "Não possui modulos. <br>";
            echo "Materia ING: " . $value['materiaingds'] . "Possui 3 modulos. <br>";

            echo "Modulos de PAM: " . $value['pammodulo1'] . "e" . $value['pammodulo2'] . "<br>";
            echo "Modulos de PW: " . $value['pwmodulo1'] . "," . $value['pwmodulo2'] . "," . $value['pwmodulo3'] . "e" . $value['pwmodulo4'] . "<br>";                        
            echo "Modulos de ING: " . $value['ingmodulo_ds1'] . "," . $value['ingmodulo_ds2'] . "e" . $value['ingmodulo_ds3'] . "<br>";                        

        }

        foreach ($adm as $key => $value) {
            echo "Materia RH: " . $value['materiarh'] . "Possui 2 modulos. <br>";
            echo "Materia GP: " . $value['materiagp'] . "Não possui modulos. <br>";
            echo "Materia TdA: " . $value['materiatda'] . "Não possui modulos. <br>";
            echo "Materia ING: " . $value['materiaingadm'] . "Possui 1 modulo. <br>";

            echo "Modulos de RH: " . $value['rhmodulo1'] . "e" . $value['rhmodulo2'] . "<br>";
            echo "Modulos de ING: " . $value['ingmodulo_adm1'] . "<br>";
            }
    }

?>