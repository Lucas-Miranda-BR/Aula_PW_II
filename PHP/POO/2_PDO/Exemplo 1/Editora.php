<?php 

class Editora(){
    private $id;
    private $nome;
    private $email;
    private $site;

    public function __construct($nome, $email, $site){
        $this -> nome = $nome;
        $this -> email = $email;
        $this -> site = $site;
    }

public function insert($nome, $email, $site){	
	    $stmt = $pdo->prepare("INSERT INTO editora (nome, email, site) VALUES (:nome, :email, :site)");
	    $stmt->bindParam(':nome', $nome);
	    $stmt->bindParam(':email', $email);
	    $stmt->bindParam(':site', $site);
	    $stmt->execute();
}

public function select($id){
    $stmt = $pdo->query("SELECT * FROM editora WHERE id=$id");
	$editora = $stmt->fetchAll();
}

public function selectAll(){
    $stmt = $pdo->query("SELECT * FROM editora");
	$editora = $stmt->fetchAll();
}

public function update($id){}

public function delete(){
    $stmt = $pdo->prepare('DELETE FROM editora WHERE id = :id');
    $stmt -> (':id', id);
    $stmt -> execute();
}

}

?>