<?php

$etec = [

    "curso" => [
        "nome" => "DS",
        "DS" => [
            "materia_pam" => "PAM",
            "PAM" => [
                "pam_mod1" => "Modulo 1 PAM",
                "pam_mod2" => "Modulo 2 PAM"
            ];
            "materia_pw" => "PW",
            "PW" => [
                "pw_mod" = "Modulo PW"
            ];
            "materia_tpa" => "TPA",
            "materia_ds_ing" => "Inglês"
        ];
        
        "nome" => "ADM",
        "ADM" => [
            "materia_rh" => "RH",
            "materia_gp" => "GP",
            "materia_ta" => "TA",
            "materia_adm_ing" => "Inglês"
        ];

    ];

    foreach ($etec as $key => $value) {
        echo $value['curso'];
        foreach($value['curso'] as $key => $value) {
            echo "<hr> <br>";
            echo $value['materia_pam'] " <br> ";
            echo $value['pam_mod1'] " <br> ";
            echo $value['pam_mod2'] " <br> ";
            echo "<br>";
            echo $value['materia_pw'] " <br> ";
            echo $value['pw_mod'] " <br> ";
            echo "<br>";
            echo $value['materia_tpa'] " <br> ";
            echo "<br>";
            echo $value['materia_ds_ing'] " <br> ";
            echo "<hr> <br>";
            echo $value['materia_rh'] " <br> ";
            echo $value['materia_gp'] " <br> ";
            echo $value['materia_ta'] " <br> ";
            echo $value['materia_adm_ing'] " <br> ";
         }
    }

];

?>