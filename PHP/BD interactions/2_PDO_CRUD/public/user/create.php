<?php

include '../../config/connection.php';

?>

<form action="create.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>

    <br></br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <br></br>

    <button type="submit">Sign up</button>
</form>

<?php

    // Verificação se existe alguma informação dentro dessas variaveis ou não.

    $username = isset($_POST['username']) ? $_POST['username'] : exit();
    $password = isset($_POST['password']) ? $_POST['password'] : exit();
    
    // Coloca os valores das variaveis dentro da tabela e colunas especificadas

    $stmt = $pdo->prepare('INSERT INTO user (username, password) VALUES (:username, :password)');

    // Ler se as informações digitadas não são maliciosas, ou seja uma limpagem das informações inseridas.

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

?>