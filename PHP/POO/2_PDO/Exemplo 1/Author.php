<?php 

class Author(){
    private $authorId;
    private $authorName;
    private $authorBibliography;
    private $authorDoB;
    private $authorPhoto;

    public function __construct($authorName, $authorBibliography, $authorDoB, $authorPhoto){
        $this -> authorName = $authorName;
        $this -> authorBibliography = $authorBibliography;
        $this -> authorDoB = $authorDoB;
        $this -> authorPhoto = $authorPhoto;
    }

public function authorRegister(){}

public function authorSearch($authorId){}

public function authorSearchAll(){}

public function authorUpdate($authorId){}

public function authorDelete(){}

}

?>