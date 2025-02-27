<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC7</title>
</head>
<body>

    <form action="index1.php" method="post">;
        <fieldset>

            <legend>Maior de idade</legend>

            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" autocomplete="off" placeholder="0-10" required>
            
            <br>

            <input type="submit" value="Enviar idade">

        </fieldset>
    </form>
    
    <?php


    if (isset($_POST["idade"])) {
        if (empty($_POST["idade"])) {
            echo "A idade é obrigatoria!";
        }

        if ($_POST["idade"] >= 18) {
            echo "Maior de idade";

        }

        else {
            echo "Menor de idade";
        }
    }

    ?>
    
</body>
</html>