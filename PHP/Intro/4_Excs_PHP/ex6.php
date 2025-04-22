<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC6</title>
</head>
<body>

    <form action="ex6.php" method="post">
        <fieldset>

            <legend>Maior valor</legend>

            <label for="valor1">Primeiro valor:</label>
            <input type="number" name="valor1" id="valor1" autocomplete="off" placeholder="1, 2, 3..." required>

            <br>

            <label for="valor2">Segundo valor:</label>
            <input type="number" name="valor2" id="valor2" autocomplete="off" placeholder="1, 2, 3..." required>

            <br>

            <input type="submit" value="Enviar valores">

        </fieldset>
    </form>
    
    <?php

    if (isset($_POST["valor1"])) {
        if (empty($_POST["valor1"])) {
            echo "O primeiro valor é obrigatorio!";
            exit();
        }
        }

        if (isset($_POST["valor2"])) {
            if (empty($_POST["valor2"])) {
                echo "O segundo valor é obrigatorio!";
                exit();
            }
            }

        if ($_POST["valor1"] > $_POST["valor2"]) {
            echo "O primeiro valor é o maior valor";
            exit();
        }

        if ($_POST["valor1"] < $_POST["valor2"]) {
            echo "O segundo valor é o maior valor";
            exit();
        }

        else {
            echo "Os valores são iguais";
            exit();
        }

    ?>
    
</body>
</html>