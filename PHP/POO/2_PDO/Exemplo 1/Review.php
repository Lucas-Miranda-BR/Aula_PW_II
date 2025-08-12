<?php 

class Review(){
    private $reviewId;
    private $reviewCommentary;
    private $reviewRating;
    private $reviewDate;

    public function __construct($reviewCommentary, $reviewRating, $reviewDate){
        $this -> reviewCommentary = $reviewCommentary;
        $this -> reviewRating = $reviewRating;
        $this -> reviewDate = $reviewDate;
    }

public function reviewRegister(){}

public function reviewSearch($reviewId){}

public function reviewSearchAll(){}

public function reviewUpdate($reviewId){}

public function reviewDelete(){}

}

?>