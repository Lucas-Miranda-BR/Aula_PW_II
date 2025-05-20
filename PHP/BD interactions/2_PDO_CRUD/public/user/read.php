<?php
    include '../../config/connection.php';

    // Buscagem de dados da tabela "user"

    $stmt = $pdo->query('SELECT * FROM infoUser');
    $userList = $stmt->fetchAll();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo "O usuario com o ID de: $id foi removido.";
    }

?>

<?php foreach ($userList as $index => $user) { ?>

        <p> Username: <strong> <?php echo $user['usernameUser']; ?> </strong> ID: <strong> <?php echo $user['id'] ?> </strong></p>
        <a href="http://localhost/pw_ii/PHP/BD%20interactions/2_PDO_CRUD/public/user/delete.php?id=<?php echo $user['id']; ?>">Delete</a>
        <a href="http://localhost/pw_ii/PHP/BD%20interactions/2_PDO_CRUD/public/user/update.php?id=<?php echo $user['id']; ?>">Update</a>
        <hr>

<?php } ?>


