<?php
    include '../../config/connection.php';
    include 'userHeader.php';
    include 'userFooter.php';

    $advertId = isset($_GET['advertId']) ? $_GET['advertId'] : exit();

    if (empty($advertId)) {
        echo 'É necessário informar o ID.';
        exit();
    }

    $stmt = $pdo -> prepare('DELETE FROM advertInfo WHERE advertId = :advertId');
    $stmt -> bindParam(':advertId', $advertId);
    $stmt -> execute();

    Header("Location: read.php?id=$advertId");
?>
