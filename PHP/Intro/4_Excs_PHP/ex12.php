<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC12</title>
</head>
<body>

    <form action="ex12.php" method="post">

        <fieldset>
            <legend>Calculadora</legend>

            <label for="valor1">Primeiro valor:</label>
            <input type="number" name="valor1" id="valor1" placeholder="1, 2, 3..." required autocomplete="off">

            <br>

            <label for="valor2">Segundo valor:</label>
            <input type="number" name="valor2" id="valor2" placeholder="1, 2, 3..." required autocomplete="off">

            <br>

            <label for="op">Operador</label>
            <input type="text" name="op" id="op" placeholder="somar, subtrair, multiplicar, dividir" required autocomplete="off">

            <br>

            <input type="submit" value="Enviar">

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

    if (isset($_POST['op'])) {
        if (empty($_POST['op'])) {
            echo 'O operador é obrigatório!';
            exit();
        }
    } 

    $operador = strtolower($_POST["op"]);

    if ($operador == "somar") {
        echo $_POST['valor1'] + $_POST['valor2'];
        exit();
    }

    if ($operador == "subtrair") {
        echo $_POST['valor1'] - $_POST['valor2'];
        exit();
    }

    
    if ($operador == "multiplicar") {
        echo $_POST['valor1'] * $_POST['valor2'];
        exit();
    }

    
    if ($operador == "dividir") {
        echo $_POST['valor1'] / $_POST['valor2'];
        exit();
    }

    ?>

</body>
</html>