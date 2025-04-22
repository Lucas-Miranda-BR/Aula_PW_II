<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC8</title>
</head>
<body>

    <form action="ex8.php" method="post">
        <fieldset>

            <legend>Bonus</legend>

            <label for="vendas">Nome do vendedor:</label>
            <input type="text" name="nome" id="nome" autocomplete="off" placeholder="Carlito, Pedrito, Astronauta" required>

            <br>

            <label for="vendas">Total de vendas</label>
            <input type="number" name="vendas" id="vendas" autocomplete="off" placeholder="1, 2, 3..." required>

            <br>

            <input type="submit" value="Enviar os dados">

        </fieldset>
    </form>
    
    <?php

    if (isset($_POST["nome"])) {
        if (empty($_POST["nome"])) {
            echo "O nome é obrigatorio!";
            exit();
        }
        }

        if (isset($_POST["vendas"])) {
            if (empty($_POST["vendas"])) {
                echo "O total de venda é obrigatorio!";
                exit();
            }
            }

        if ($_POST["vendas"] > 1000) {
            echo $_POST["vendas"]*1.3;
            echo "Bonus de 30%";
            exit();

        }

        if ($_POST["vendas"] > 2000) {
            echo $_POST["vendas"]*1.2;
            echo "Bonus de 20%";
            exit();
        }

        if ($_POST["vendas"] > 5000) {
            echo $_POST["vendas"]*1.1;
            echo "Bonus de 10%";
            exit();
        }

        else {
            echo "Não acresentara um bonus";
            exit();
        }

    ?>
    
</body>
</html>