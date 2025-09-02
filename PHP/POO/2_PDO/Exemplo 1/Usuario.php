<?php 

class Usuario {
private $id;
private $nome;
private $email;
private $senha;
private $tipo;

public function __construct($nome, $email, $senha, $tipo){

    $this -> nome = $nome;
    $this -> email = $email;
    $this -> senha = $senha;
    $this -> tipo = $tipo;

}

public function insert($nome, $email, $senha, $confirmar_senha, $tipo ){
    global $pdo;
    // echo var_dump($confirmar_senha);
	if ($senha != $confirmar_senha) {
        return 'Senhas não são iguais.';
	}
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmar_senha)){
        return 'Preencha todos os campos.';
    }
    
        $tipo = 'admin';
	    $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)");
	    $stmt->bindParam(':nome', $nome);
	    $stmt->bindParam(':email', $email);
	    $stmt->bindParam(':senha', $senha);
	    $stmt->bindParam(':tipo', $tipo);
	    $stmt->execute();

		return `Cadastro realizado com sucesso`;
}

public function select($id){
    $stmt = $pdo->query("SELECT * FROM usuario WHERE id=$id");
	$usuario = $stmt->fetchAll();
}

public function selectAll(){
    $stmt = $pdo->query("SELECT * FROM usuario");
	$usuario = $stmt->fetchAll();
}

public function update($id, $nome, $email, $senha, $tipo){
	$stmt = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, senha = :senha, tipo = :tipo WHERE id = :id");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
}

public function login(){}

public function logout(){}
}

?>