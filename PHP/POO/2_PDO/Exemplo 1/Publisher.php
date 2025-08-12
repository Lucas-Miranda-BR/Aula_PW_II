<?php 

class Publisher(){
    private $publisherId;
    private $publisherName;
    private $publisherEmail;
    private $publisherWebsite;

    public function __construct($publisherName, $publisherEmail, $publisherWebsite){
        $this -> publisherName = $publisherName;
        $this -> publisherEmail = $publisherEmail;
        $this -> publisherWebsite = $publisherWebsite;
    }

public function publisherRegister(){}

public function publisherSearch($publisherWebsite){}

public function publisherSearchAll(){}

public function publisherUpdate($publisherId){}

public function publisherDelete(){}

}

?>