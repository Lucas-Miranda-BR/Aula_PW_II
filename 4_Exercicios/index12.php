<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC12</title>
</head>
<body>

    <form action="index12.php" method="post">

        <fieldset>
            <legend>Calculadora</legend>

            <label for="valor1">Primeiro valor:</label>
            <input type="number" name="valor1" id="valor1" placeholder="Número" required autocomplete="off">

            <br>

            <label for="valor2">Segundo valor:</label>
            <input type="number" name="valor2" id="valor2" placeholder="Número" required autocomplete="off">

            <br>

            <input type="submit" name="somar" value="Somar">
            <input type="submit" name="subtrair" value="Subtrair">
            <input type="submit" name="multiplicar" value="Multiplicar">
            <input type="submit" name="dividir" value="Dividir">
        </fieldset>

    </form>

    <?php


    if (isset($_POST['valor1'])) {
        if (empty($_POST['valor1'])) {
            echo 'O primeiro valor é obrigatório!';
            exit();
        }
    }
    else {
        exit();
    }
    
    if (isset($_POST['valor2'])) {
        if (empty($_POST['valor2'])) {
            echo 'O segundo valor é obrigatório!';
            exit();
        }
    } 
    else {
        exit();
    }
        if (isset($_POST ['somar']))
            echo $_POST['valor1'] + $_POST['valor2'];

        if (isset($_POST ['subtrair']))
            echo $_POST['valor1'] - $_POST['valor2'];

        if (isset($_POST ['multiplicar']))
            echo $_POST['valor1'] * $_POST['valor2'];

        if (isset($_POST ['dividir']))
            echo $_POST['valor1'] / $_POST['valor2'];

    ?>

</body>
</html>