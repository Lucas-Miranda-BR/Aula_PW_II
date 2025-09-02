<?php 

class Autor{
    private $id;
    private $nome;
    private $bibliografia;
    private $foto;

    public function __construct($nome, $bibliografia, $foto){
        $this -> nome = $nome;
        $this -> bibliografia = $bibliografia;
        $this -> foto = $foto;
    }

public function Insert($nome, $bibliografia, $foto){
	    $stmt = $pdo->prepare("INSERT INTO autor (nome, bibliografia, foto) VALUES (:nome, :bibliografia, :foto)");
	    $stmt->bindParam(':nome', $nome);
	    $stmt->bindParam(':bibliografia', $bibliografia);
	    $stmt->bindParam(':foto', $foto);
	    $stmt->execute();
}

public function Select($id){
    $stmt = $pdo->query("SELECT * FROM autor WHERE id=$id");
	$autor = $stmt->fetchAll();
}

public function selectAll(){
    $stmt = $pdo->query("SELECT * FROM autor");
	$autor = $stmt->fetchAll();
}

public function update($id, $nome, $biografia, $foto){
    $stmt = $pdo->prepare("UPDATE usuario SET nome = :nome, biografia = :biografia, foto = :foto WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':biografia', $biografia);
    $stmt->bindParam(':foto', $foto);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
}

public function delete($id){
    $stmt = $pdo->prepare('DELETE FROM autor WHERE id = :id');
    $stmt -> bindParam(':id', $id);
    $stmt -> execute();
}
}

?>