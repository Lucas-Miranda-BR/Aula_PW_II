<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC11</title>
</head>
<body>
    
<form action="index11.php" method="post">

<fieldset>

    <legend>Classificação de triangulos</legend>

    <label for="lado_1">Valor do primeiro lado:</label>
    <input type="number" name="lado_1" id="lado_1" required autocomplete="off" placeholder="1, 2, 3...">

    <br>

    <label for="lado_2">Valor do segundo lado:</label>
    <input type="number" name="lado_2" id="lado_2" required autcomplete="off" placeholder="1, 2, 3...">
    
    <br>

    <label for="lado_3">Valor do terceiro lado:</label>
    <input type="number" name="lado_3" id="lado_3" required autcomplete="off" placeholder="1, 2, 3...">

    <br>

    <input type="submit" value="Enviar valores dos lados">

</fieldset>

</form>

<?php

if(isset($_POST["lado_1"])) {
    if (empty($_POST["lado_1"])) {
        echo "O valor do primeiro lado é obrigatorio!";
        exit();
    }
}

if(isset($_POST["lado_2"])) {
    if (empty($_POST["lado_2"])) {
        echo "O valor do segundo lado é obrigatorio!";
        exit();
    }
}

if(isset($_POST["lado_3"])) {
    if (empty($_POST["lado_3"])) {
        echo "O valor do terceiro lado é obrigatorio!";
        exit();
    }
}

if ($_POST["lado_1"] == $_POST["lado_2"] && $_POST["lado_1"] == $_POST["lado_3"] && $_POST["lado_2"] == $_POST["lado_3"]) {
    echo "Equilatero";
    exit();
}

if ($_POST["lado_1"] == $_POST["lado_2"] || $_POST["lado_1"] == $_POST["lado_3"] || $_POST["lado_2"] == $_POST["lado_3"]) {
    echo "Isosceles";
    exit();
}

if ($_POST["lado_1"] > $_POST["lado_2"] || $_POST["lado_1"] > $_POST['lado_3'] || $_POST["lado_3"] > $_POST["lado_2"] || $_POST["lado_3"] > $_POST["lado_2"] || $_POST["lado_2"] > $_POST["lado_3"] || $_POST["lado_2"] > $_POST["lado_3"]) {
    echo "Escaleno";
    exit();
}

else {
    echo "Não é triangulo";
    exit();
}

?>

</body>
</html>