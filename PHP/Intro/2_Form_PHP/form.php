<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="form.php" method="get">

        <fieldset>
            <legend>Informações do Personagem</legend>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do personagem" required autocomplete="off">

            <br>

            <label for="poder">Poder:</label>
            <input type="text" name="poder" id="poder" placeholder="Poder do personagem" required autocomplete="off">

            <br>

            <input type="submit" value="Enviar">
        </fieldset>

    </form>

    <?php

    if (isset($_GET[`nome`])) {
        if (empty($_GET[`nome`])) {
            echo `O nome é obrigatório!`;
        }
        else {
            echo $_GET[`nome`];
        }
    }
    
    if (isset($_GET[`poder`])) {
        if (empty($_GET[`poder`])) {
            echo `O poder é obrigatório!`;
        }
        else {
            echo $_GET[`poder`];
        }
    } 
        
    ?>

</body>
</html>