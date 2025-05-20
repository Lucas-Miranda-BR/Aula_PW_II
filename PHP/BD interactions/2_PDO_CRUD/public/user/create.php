<?php

include '../../config/connection.php';

?>

<form action="create.php" method="post">
    <label for="usernameUser">Username</label>
    <input type="text" name="usernameUser" id="usernameUser" required autocomplete="off">

    <br></br>

    <label for="passwordUser">Password</label>
    <input type="password" name="passwordUser" id="passwordUser" required autocomplete="off">

    <br></br>

    <button type="submit">Sign up</button>
</form>

<?php

    // Verificação se existe alguma informação dentro dessas variaveis ou não.

    $usernameUser = isset($_POST['usernameUser']) ? $_POST['usernameUser'] : exit();
    $passwordUser = isset($_POST['passwordUser']) ? $_POST['passwordUser'] : exit();
    
    // Coloca os valores das variaveis dentro da tabela e colunas especificadas

    $stmt = $pdo->prepare('INSERT INTO infoUser (usernameUser, passwordUser) VALUES (:usernameUser, :passwordUser)');

    // Ler se as informações digitadas não são maliciosas, ou seja uma limpagem das informações inseridas.

    $stmt->bindParam(':usernameUser', $usernameUser);
    $stmt->bindParam(':passwordUser', $passwordUser);
    $stmt->execute();

?>