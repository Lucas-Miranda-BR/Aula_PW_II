<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC3</title>
</head>
<body>

    <form action="index3.php" method="post">
        <fieldset>

            <legend>Número maior que 100</legend>

            <label for="num">Número:</label>
            <input type="number" name="num" id="num" autocomplete="off" placeholder="1, 2, 3..." required>

            <br>

            <input type="submit" value="Enviar o número">

        </fieldset>
    </form>
    
    <?php

    if (isset($_POST["num"])) {
        if (empty($_POST["num"])) {
            echo "O número é obrigatorio!";
        }

        if ($_POST["num"] > 100) {
            echo "O número é maior que 100";

        }

        if ($_POST["num"] < 100) {
            echo "O número é menor que 100";
        }

        else {
            echo "O número é igual a 100";
        }

    ?>
    
</body>
</html>