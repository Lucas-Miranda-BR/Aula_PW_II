<?php 

class Ebook(){
    private $ebookId;
    private $ebookTitle;
    private $ebookDescription;
    private $ebookIsbn;
    private $ebookPublishDate;
    private $ebookPrice;
    private $ebookLanguage;
    private $ebookPhoto;

    public function __construct($ebookTitle, $ebookDescription, $ebookIsbn, $ebookPublishDate, $ebookPrice, $ebookLanguage, $ebookPhoto){
        $this -> ebookTitle = $ebookTitle;
        $this -> ebookDescription = $ebookDescription;
        $this -> ebookIsbn = $ebookIsbn;
        $this -> ebookPublishDate = $ebookPublishDate;
        $this -> ebookPrice = $ebookPrice;
        $this -> ebookLanguage = $ebookLanguage;
        $this -> ebookPhoto = $ebookPhoto;
    }

public function ebookRegister(){}

public function ebookSearch($ebookId){}

public function ebookSearchAll(){}

public function ebookUpdate($ebookId){}

public function ebookDelete(){}

}

?>