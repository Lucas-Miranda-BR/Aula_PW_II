<?php
    include '../../config/connection.php';

    // Buscagem de dados da tabela "user"

    $stmt = $pdo->query('SELECT * FROM infouser');
    $userList = $stmt->fetchAll();

    if (isset($_GET['idUser'])) {
        $idUser = $_GET['idUser'];
        echo "O usuario com o ID de: $idUser foi removido.";
    }

?>

<?php foreach ($userList as $index => $user) { ?>

        <p> Username: <strong> <?php echo $user['usernameUser']; ?> </strong> ID: <strong> <?php echo $user['idUser'] ?> </strong></p>
        <a href="http://localhost/pw_ii/PHP/BD%20interactions/2_PDO_CRUD/public/user/delete.php?id=<?php echo $user['idUser']; ?>">Delete</a>
        <a href="http://localhost/pw_ii/PHP/BD%20interactions/2_PDO_CRUD/public/user/update.php?id=<?php echo $user['idUser']; ?>">Edit</a>
        <hr>

<?php } ?>


