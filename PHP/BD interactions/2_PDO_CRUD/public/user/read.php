<?php
    include '../../config/connection.php';

    // Buscagem de dados da tabela "user"

    $stmt = $pdo->query('SELECT * FROM user');
    $userList = $stmt->fetchAll();
?>

<?php foreach ($userList as $index => $user) { ?>

        <p> Character's name: <strong> <?php echo $user['username']; ?> </strong> ID: <strong> <?php echo $user['id'] ?> </strong></p>
        <a href="">Remove</a>
        <a href="">Edit</a>
        <hr>

<?php } ?>


