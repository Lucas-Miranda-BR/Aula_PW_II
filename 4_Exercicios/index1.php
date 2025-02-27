<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC1</title>
</head>
<body>

    <form action="index1.php" method="post">;
        <fieldset>

            <legend>Classificação de notas</legend>

            <label for="nota">Nota:</label>
            <input type="number" name="nota" id="nota" autocomplete="off" placeholder="0-10" required>
            
            <br>

            <input type="submit" value="Enviar nota">

        </fieldset>
    </form>
    
    <?php

    if (isset($_POST["nota"])) {
        if (empty($_POST["nota"])) {
            echo "A nota é obrigatoria!";
        }

        if ($_POST["nota"] < 6) {
            echo "Reprovado";

        }

        if ($_POST["nota"] >=6 && $_POST["nota"] <= 7) {
            echo "Recuperação";
        }

        else {
            echo "Aprovado";
        }
    }

    ?>
    
</body>
</html>