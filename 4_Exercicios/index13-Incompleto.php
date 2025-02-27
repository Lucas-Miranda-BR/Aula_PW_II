<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC13</title>
</head>
<body>

    <form action="index13.php" method="post">;
        <fieldset>

            <legend>Media de notas e frequencia</legend>

            <label for="n1">Primeira Nota:</label>
            <input type="number" name="n1" id="n1" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <label for="n2">Segunda Nota:</label>
            <input type="number" name="n2" id="n2" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <label for="n3">Terceira Nota:</label>
            <input type="number" name="n3" id="n3" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <label for="n4">Quarta Nota:</label>
            <input type="number" name="n4" id="n4" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <label for="freq">Frequencia:</label>
            <input type="number" name="freq" id="freq" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <input type="submit" value="Enviar valores">

        </fieldset>
    </form>
    
    <?php


    if (isset($_POST["n1"])) {
        if (empty($_POST["n1"])) {
            echo "O primeiro valor é obrigatorio!";
            exit();
        }
        }

        if (isset($_POST["n2"])) {
            if (empty($_POST["n2"])) {
                echo "O segundo valor é obrigatorio!";
                exit();
            }
            }

            if (isset($_POST["n3"])) {
                if (empty($_POST["n3"])) {
                    echo "O terceiro valor é obrigatorio!";
                    exit();
                }
                }

                if (isset($_POST["n4"])) {
                    if (empty($_POST["n4"])) {
                        echo "O terceiro valor é obrigatorio!";
                        exit();
                    }
                    }

                    if (isset($_POST["freq"])) {
                        if (empty($_POST["freq"])) {
                            echo "O terceiro valor é obrigatorio!";
                            exit();
                        }
                        }

                        ## Calcular media

    ?>
    
</body>
</html>