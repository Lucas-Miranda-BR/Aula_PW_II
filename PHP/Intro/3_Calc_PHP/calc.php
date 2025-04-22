<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora simples</title>
</head>
<body>

    <form action="calc.php" method="get">

        <fieldset>
            <legend>Calculadora simples</legend>

            <label for="valor_1">Primeiro valor:</label>
            <input type="number" name="valor_1" id="valor_1" placeholder="Número" required autocomplete="off">

            <br>

            <label for="valor_2">Segundo valor:</label>
            <input type="number" name="valor_2" id="valor_2" placeholder="Número" required autocomplete="off">

            <br>

            <input type="submit" name="somar" value="Somar">
            <input type="submit" name="subtrair" value="Subtrair">
            <input type="submit" name="multiplicar" value="Multiplicar">
            <input type="submit" name="dividir" value="Dividir">
        </fieldset>

    </form>

    <?php


    if (isset($_GET['valor_1'])) {
        if (empty($_GET['valor_1'])) {
            echo 'O primeiro valor é obrigatório!';
            exit();
        }
    }
    else {
        exit();
    }
    
    if (isset($_GET['valor_2'])) {
        if (empty($_GET['valor_2'])) {
            echo 'O segundo valor é obrigatório!';
            exit();
        }
    } 
    else {
        exit();
    }
        if (isset($_GET ['somar']))
            echo $_GET['valor_1'] + $_GET['valor_2'];

        if (isset($_GET ['subtrair']))
            echo $_GET['valor_1'] - $_GET['valor_2'];

        if (isset($_GET ['multiplicar']))
            echo $_GET['valor_1'] * $_GET['valor_2'];

        if (isset($_GET ['dividir']))
            echo $_GET['valor_1'] / $_GET['valor_2'];

    ?>

</body>
</html>