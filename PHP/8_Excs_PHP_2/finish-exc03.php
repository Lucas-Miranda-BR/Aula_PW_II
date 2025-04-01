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
            echo $value['materia_pam'] " ";
            echo $value['pam_mod1'] " ";
            echo $value['pam_mod2'] " ";
            echo "br";
         }
    }

];

?>