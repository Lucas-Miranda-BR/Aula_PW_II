<?php 

class User(){
private $userId;
private $userUsername;
private $userEmail;
private $userPassword;
private $userType

public function __construct($userUsername, $userEmail, $userPassword, $userType){

    $this -> userUsername = $userUsername;
    $this -> userEmail = $userEmail;
    $this -> userPassword = $userPassword;
    $this -> userType = $userType;

}

public function userRegister(){}

public function userSearch($userId){}

public function userSearchAll(){}

public function userUpdate($userId){}

public function userLogin(){}

public function userLogout(){}
}

?>