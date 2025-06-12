<?php

$host = 'localhost';
$database = 'AdvertDB';
$userDB = 'root';
$passwordDB = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8;", $userDB, $passwordDB);

} catch (PDOException $error) {
    die("Error: " . $error->getMessage());
}

?>