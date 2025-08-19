<?php 

$dbHost = 'localhost';
$dbPassword = '';
$dbUsername = 'root';
$dbName = 'sistema_ebooks';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8;", $dbUsername, $dbPassword);

} catch (PDOException $dbError) {
    die("Error: " . $dbError->getMessage());
}

?>