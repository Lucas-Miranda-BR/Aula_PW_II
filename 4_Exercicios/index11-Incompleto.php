<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC11</title>
</head>
<body>

    <form action="index11-Incompleto.php" method="post">;
        <fieldset>

            <legend>Triangulo</legend>

            <label for="ladoa">Primeiro Lado:</label>
            <input type="number" name="ladoa" id="ladoa" autocomplete="off" required>
            
            <br>

            <label for="ladob">Segundo Lado:</label>
            <input type="number" name="ladob" id="ladob" autocomplete="off" required>
            
            <br>

            <label for="ladoc">Terceiro Lado:</label>
            <input type="number" name="ladoc" id="ladoc" autocomplete="off" required>
            
            <br>

            <input type="submit" value="Enviar dados">

        </fieldset>
    </form>
    
    <?php


    if (isset($_POST["ladoa"])) {
        if (empty($_POST["ladoa"])) {
            echo "O primeiro lado é obrigatorio!";
            exit();
        }
        }

        if (isset($_POST["ladob"])) {
            if (empty($_POST["ladob"])) {
                echo "O segundo lado é obrigatorio!";
                exit();
            }
            }

            if (isset($_POST["ladoc"])) {
                if (empty($_POST["ladoc"])) {
                    echo "O Terceiro lado é obrigatorio!";
                    exit();
                }
                }

        if ($_POST["ladoa"] == $_POST["ladob"] && $_POST["ladoa"] == $_POST["ladoc"] && $_POST["ladoc"] == $_POST["ladob"]) {
            echo "Equilatero";
            exit();
        }

        if ($_POST["ladoa"] == $_POST["ladob"] || $_POST["ladoa"] == $_POST["ladoc"] || $_POST["ladoc"] == $_POST["ladob"]) {
            echo "Isosceles";
            exit();
        }

        ## Calcular Escaleno

        else {
            echo "Não é triangulo";
            exit();
        }

    ?>
    
</body>
</html>