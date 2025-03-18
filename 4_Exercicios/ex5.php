<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC5</title>
</head>
<body>

    <form action="ex5.php" method="post">
        <fieldset>

            <legend>Vogal ou consoante</legend>

            <label for="letra">Letra:</label>
            <input type="text" name="letra" id="letra" autocomplete="off" placeholder="a, b, c..."  required max="2">

            <br>

            <input type="submit" value="Enviar letra">

        </fieldset>
    </form>
    
    <?php

    if (isset($_POST["letra"])) {
        if (empty($_POST["letra"])) {
            echo "A letra é obrigatoria!";
            exit();
        }
    }
    $letra = strtolower($_POST['letra']);

    if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
        echo "Vogal";
        exit();
    }

    else {
        echo "A letra $letra. Não é uma vogal, Sendo consoante ou um outro caractere";
        exit();
    }
    
    ?>
    
</body>
</html>