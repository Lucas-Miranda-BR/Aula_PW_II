<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC2</title>
</head>
<body>

    <form action="index2.php" method="post">
        <fieldset>

            <legend>Permisão de voto</legend>

            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" autocomplete="off" placeholder="1, 2, 3..." required>

            <br>

            <input type="submit" value="Enviar idade">

        </fieldset>
    </form>
    
    <?php

    if (isset($_POST["idade"])) {
        if (empty($_POST["idade"])) {
            echo "A idade é obrigatoria!";
            exit();
        }
        }

        if ($_POST["idade"] >= 60) {
            echo "Opicional";
            exit();

        }

        if ($_POST["idade"] >= 18 && $_POST["idade"] < 60) {
            echo "Obrigatorio";
            exit();
        }

        if ($_POST["idade"] >= 16 && $_POST["idade"] < 18) {
            echo "Opicional";
            exit();
        }

        else {
            echo "Não pode votar";
            exit();
        }

    ?>
    
</body>
</html>