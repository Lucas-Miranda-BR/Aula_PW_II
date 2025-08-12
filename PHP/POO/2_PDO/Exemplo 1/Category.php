<?php 

class Category(){
    private $categoryId;
    private $categoryName;

    public function __construct($categoryName){
        $this -> categoryName = $categoryName;
    }

public function categoryRegister(){}

public function categorySearch($categoryId){}

public function categorySearchAll(){}

public function categoryUpdate($categoryId){}

public function categoryDelete(){}

}

?>