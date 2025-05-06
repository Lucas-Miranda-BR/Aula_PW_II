<?php

// Configuração da conexão com o BD

// A localização do ambiente que você esta trabalhando, isso é o URL inteiro do servidor i.e www.wikipedia.org
$host = 'localhost'; // Utilize-se o "localhost" para ser um servidor local.

// O tipo do cliente que você esta trabalhando com, ou seja o ambiente desse trabalho. i.e Supermercado
$database = 'school';

// Utilizar "root" caso for um servidor local
$user = 'root';

// Caso for necessario, adicionar uma senha
$password = '';

/*
    Realizando conexão com o BD a partir
            do plugin PHP PDO
*/

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8;", $user, $password);

} catch (PDOException $error) {
    die("Error: " . $error->getMessage());
}


?>