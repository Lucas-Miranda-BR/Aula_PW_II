<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC13</title>
</head>
<body>

    <form action="ex13.php" method="post">;
        <fieldset>

            <legend>Media de notas e frequencia</legend>

            <label for="n_port">Nota portugues:</label>
            <input type="number" name="n_port" id="n_port" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <label for="n_mat">Nota matematica:</label>
            <input type="number" name="n_mat" id="n_mat" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <label for="n_ing">Nota ingles:</label>
            <input type="number" name="n_ing" id="n_ing" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <label for="n_inf">Nota informatica:</label>
            <input type="number" name="n_inf" id="n_inf" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <label for="freq">Frequencia:</label>
            <input type="number" name="freq" id="freq" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <input type="submit" value="Enviar valores">

        </fieldset>
    </form>
    
    <?php

    $media = ($_POST["n_port"] + $_POST["n_mat"] + $_POST["n_ing"] + $_POST["n_inf"])/4;

    if (isset($_POST["n_port"])) {
        if (empty($_POST["n_port"])) {
            echo "A primeira nota é obrigatoria!";
            exit();
        }
        }

        if (isset($_POST["n_mat"])) {
            if (empty($_POST["n_mat"])) {
                echo "A segunda nota é obrigatoria!";
                exit();
            }
            }

            if (isset($_POST["n_ing"])) {
                if (empty($_POST["n_ing"])) {
                    echo "A terceira nota é obrigatoria!";
                    exit();
                }
                }

                if (isset($_POST["n_inf"])) {
                    if (empty($_POST["n_inf"])) {
                        echo "A quarta nota é obrigatoria!";
                        exit();
                    }
                    }

                    if (isset($_POST["freq"])) {
                        if (empty($_POST["freq"])) {
                            echo "A frequencia é obrigatoria!";
                            exit();
                        }
                        }

                        if ($media < 7 && $_POST["freq"] < 75) {
                            echo "Reprovado por ter uma media menor que 7 e uma frequencia menor que 75%";
                            exit();
                        }
                    
                        if ($_POST["freq"] < 75) {
                        echo "Reprovado por ter uma frequencia menor que 75%";
                        exit();
                    }

                    if ($media < 7) {
                        echo "Reprovado por ter uma media menor 7";
                        exit();
                    }

                    if ($media >= 7 && $_POST["freq"] >= 75) {
                        echo "Aprovado";
                        exit();
                    }

    ?>
    
</body>
</html>