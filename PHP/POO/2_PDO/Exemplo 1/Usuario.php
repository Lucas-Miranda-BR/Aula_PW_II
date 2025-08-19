<?php 

class Usuario(){
private $Id;
private $name;
private $email;
private $password;
private $type

public function __construct($nome, $email, $senha, $tipo){

    $this -> nome = $nome;
    $this -> email = $email;
    $this -> senha = $senha;
    $this -> tipo = $tipo;

}

public function insert($nome, $email, $senha, $tipo){
        $tipo = 'admin';
	    $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)");
	    $stmt->bindParam(':nome', $nome);
	    $stmt->bindParam(':email', $email);
	    $stmt->bindParam(':senha', $senha);
	    $stmt->bindParam(':tipo', $tipo);
	    $stmt->execute();
}

public function select($id){
    $stmt = $pdo->query("SELECT * FROM usuario WHERE id=$id");
	$usuario = $stmt->fetchAll();
}

public function selectAll(){
    $stmt = $pdo->query("SELECT * FROM usuario");
	$usuario = $stmt->fetchAll();
}

public function update($id){}

public function login(){}

public function logout(){}
}

?>