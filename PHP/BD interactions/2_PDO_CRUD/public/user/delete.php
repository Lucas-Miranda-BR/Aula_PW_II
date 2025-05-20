<?php
    include '../../config/connection.php';

    $id = isset($_GET['id']) ? $_GET['id'] : exit();

    if (empty($id)) {
        echo 'É necessário informar o ID.';
        exit();
    }

    $stmt = $pdo -> prepare('DELETE FROM infoUser WHERE id = :id');
    $stmt -> bindParam(':id', $id);
    $stmt -> execute();

    Header("Location: read.php?id=$id");
?>

