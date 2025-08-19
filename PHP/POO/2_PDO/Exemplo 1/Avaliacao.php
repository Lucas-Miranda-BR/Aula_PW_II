<?php 

class Avaliacao(){
    private $id;
    private $comentario;
    private $nota;
    private $data;

    public function __construct($comentario, $nota, $data){
        $this -> comentario = $comentario;
        $this -> nota = $nota;
        $this -> data = $data;
    }

public function insert($comentario, $nota, $data){
	    $stmt = $pdo->prepare("INSERT INTO avaliacao (comentario, nota, data) VALUES (:comentario, :nota, :data)");
	    $stmt->bindParam(':comentario', $comentario);
	    $stmt->bindParam(':nota', $nota);
	    $stmt->bindParam(':data', $data);
	    $stmt->execute();
}

public function select($id){
    $stmt = $pdo->query("SELECT * FROM avaliacao WHERE id=$id");
	$avaliacao = $stmt->fetchAll();
}

public function selectAll(){
    $stmt = $pdo->query("SELECT * FROM avaliacao");
	$avaliacao = $stmt->fetchAll();
}

public function update($id){}

public function delete(){
    $stmt = $pdo->prepare('DELETE FROM avaliacao WHERE id = :id');
    $stmt -> (':id', id);
    $stmt -> execute();

}

?>