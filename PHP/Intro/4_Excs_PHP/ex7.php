<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC7</title>
</head>
<body>

    <form action="ex7.php" method="post">
        <fieldset>

            <legend>Maior de idade</legend>

            <label for="ano_nascimento">Ano que nasceu:</label>
            <input type="number" name="ano_nascimento" id="ano_nascimento" autocomplete="off" placeholder="1, 2, 3..." required>
            
            <br>

            <input type="submit" value="Enviar ano de nascimento">

        </fieldset>
    </form>
    
    <?php

    if (isset($_POST["ano_nascimento"])) {
        if (empty($_POST["ano_nascimento"])) {
            echo "O ano que nasceu é obrigatorio!";
            exit();
        }
        }

        if (2025 - ($_POST["ano_nascimento"]) >= 18) {
            echo "Maior de idade";
            exit();
        }

        else {
            echo "Menor de idade";
            exit();
        }

    ?>
    
</body>
</html>