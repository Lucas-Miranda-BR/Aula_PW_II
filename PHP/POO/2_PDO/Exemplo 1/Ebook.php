<?php 

class Ebook(){
    private $id;
    private $titulo;
    private $descricao;
    private $isbn;
    private $data_publicacao;
    private $preco;
    private $idioma;
    private $foto;

    public function __construct($titulo, $descricao, $isbn, $data_publicacao, $preco, $idioma, $foto){
        $this -> titulo = $titulo;
        $this -> descricao = $descricao;
        $this -> isbn = $isbn;
        $this -> data_publicacao = $data_publicacao;
        $this -> preco = $preco;
        $this -> idioma = $idioma;
        $this -> foto = $foto;
    }

public function insert($titulo, $descricao, $isbn, $data_publicacao, $preco, $idioma, $foto){
	    $stmt = $pdo->prepare("INSERT INTO ebook (titulo, descricao, isbn, data_publicacao, preco, idioma, foto) VALUES (:titulo, :descricao, :isbn, :data_publicacao, :preco, :idioma, :foto)");
	    $stmt->bindParam(':titulo', $titulo);
	    $stmt->bindParam(':descricao', $descricao);
	    $stmt->bindParam(':isbn', $isbn);
	    $stmt->bindParam(':data_publicacao', $data_publicacao);
	    $stmt->bindParam(':preco', $preco);
	    $stmt->bindParam(':idioma', $idioma);
	    $stmt->bindParam(':foto', $foto);
	    $stmt->execute();
}

public function select($id){
    $stmt = $pdo->query("SELECT * FROM ebook WHERE id=$id");
	$ebook = $stmt->fetchAll();
}

public function selectAll(){
    $stmt = $pdo->query("SELECT * FROM ebook");
	$ebook = $stmt->fetchAll();
}

public function update($id){}

public function delete(){
    $stmt = $pdo->prepare('DELETE FROM ebook WHERE id = :id');
    $stmt -> (':id', id);
    $stmt -> execute();
}

}

?>