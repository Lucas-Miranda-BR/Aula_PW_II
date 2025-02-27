<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC4</title>
</head>
<body>

    <form action="index4.php" method="post">
        <fieldset>

            <legend>Primeiro ou segundo semestre</legend>

            <label for="mes">Mes:</label>
            <input type="number" name="mes" id="mes" autocomplete="off" placeholder="1 = jan, 2 = fev..." required>

            <br>

            <input type="submit" value="Enviar mes">

        </fieldset>
    </form>
    
    <?php

    if (isset($_POST["mes"])) {
        if (empty($_POST["mes"])) {
            echo "O mes é obrigatorio!";
            exit();
        }
        }

        if ($_POST["mes"] <= 6) {
            echo "Primeiro semestre";
            exit();
        }

        else {
            echo "Segundo semestre";
            exit();
        }
    

    ?>
    
</body>
</html>