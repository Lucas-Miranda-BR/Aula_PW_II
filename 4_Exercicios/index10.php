<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXC10</title>
</head>
<body>

    <form action="index10.php" method="post">;
        <fieldset>

            <legend>Login</legend>

            <label for="user">Usuario:</label>
            <input type="text" name="user" id="user" autocomplete="off" required>
            
            <br>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" autocomplete="off" required>

            <br>

            <input type="submit" value="Enviar dados">

        </fieldset>
    </form>
    
    <?php


    if (isset($_POST["user"])) {
        if (empty($_POST["user"])) {
            echo "O nome de usuario é obrigatorio!";
            exit();
        }
        }

        if (isset($_POST["password"])) {
            if (empty($_POST["password"])) {
                echo "A senha é obrigatoria!";
                exit();
            }
            }

        if ($_POST["user"] == "Admin" && $_POST["password"] == 123) {
            echo "Conectado com sucesso!";
            exit();
        }

        else {
            echo "Acesso negado! Usuário ou Senha incorretos!";
            exit();
        }

    ?>
    
</body>
</html>