<?php 

class Avaliacao{
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

public function update($id, $nota, $comentario, $data){
    $stmt = $pdo->prepare("UPDATE usuario SET nota = :nota, comentario = :comentario, data = :data WHERE id = :id");
    $stmt->bindParam(':nota', $nota);
    $stmt->bindParam(':comentario', $comentario);
    $stmt->bindParam(':data', $data);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

public function delete($id){
    $stmt = $pdo->prepare('DELETE FROM avaliacao WHERE id = :id');
    $stmt -> bindParam(':id', $id);
    $stmt -> execute();

}
}

?>