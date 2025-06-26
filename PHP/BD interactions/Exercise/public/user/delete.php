<?php
    include 'userFooter.php';
    include 'userHeader.php';
    include '../../config/connection.php';
    $idAdvert = isset($_GET['advertId']) ? $_GET['advertId'] : exit();
    if (empty($idAdvert)) {
        die('É necessário informar o ID');
    }
    $stmt = $pdo -> prepare('DELETE FROM advertinfo WHERE advertId = :advertId');
    $stmt -> bindParam(':advertId', $idAdvert);
    $stmt -> execute();
    header("location: read.php?advertId=$idAdvert");
?>
