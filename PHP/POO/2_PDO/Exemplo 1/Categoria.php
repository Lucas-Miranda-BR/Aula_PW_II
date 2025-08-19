<?php 

class Categoria(){
    private $id;
    private $nome;

    public function __construct($nome){
        $this -> nome = $nome;
    }

public function insert($nome){
	    $stmt = $pdo->prepare("INSERT INTO categoria (nome) VALUES (:nome)");
	    $stmt->bindParam(':nome', $nome);
	    $stmt->execute();
}

public function select($id){
    $stmt = $pdo->query("SELECT * FROM categoria WHERE id=$id");
	$categoria = $stmt->fetchAll();
}

public function selectAll(){
    $stmt = $pdo->query("SELECT * FROM categoria");
	$categoria = $stmt->fetchAll();
}

public function update($id){}

public function delete(){
    $stmt = $pdo->prepare('DELETE FROM categoria WHERE id = :id');
    $stmt -> (':id', id);
    $stmt -> execute();
}

}

?>