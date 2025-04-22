<?php

// Configuração da conexão com o BD

$host = 'localhost'; // Se for um servidor não local, inserir o URL inteiro do servidor i.e www.wikipedia.org

$database = 'escola'; // Variavel, baseado em qual tipo de cliente voce esta trabalhando com. i.e Supermercado

$user = 'root'; // Utilizar "root" caso for um servidor local

$password = ''; // Caso for necessario, adicionar uma senha

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