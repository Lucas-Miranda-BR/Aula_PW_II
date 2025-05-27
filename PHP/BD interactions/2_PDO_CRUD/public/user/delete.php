<?php
    include '../../config/connection.php';

    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : exit();

    if (empty($idUser)) {
        echo 'É necessário informar o ID.';
        exit();
    }

    $stmt = $pdo -> prepare('DELETE FROM infouser WHERE idUser = :idUser');
    $stmt -> bindParam(':idUser', $idUser);
    $stmt -> execute();

    Header("Location: read.php?idUser=$idUser");
?>

