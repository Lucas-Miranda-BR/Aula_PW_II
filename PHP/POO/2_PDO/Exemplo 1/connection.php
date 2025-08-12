<?php 

$dbHost = 'localhost';
$dbPassword = '';
$dbUsername = 'root';
$dbName = 'dbebook';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8;", $dbUsername, $dbPassword);

} catch (PDOException $dbError) {
    die("Error: " . $dbError->getMessage());
}

?>