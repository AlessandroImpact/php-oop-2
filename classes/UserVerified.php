<?php

require_once __DIR__ . '/user.php';

class UserVerified extends user {

    public $username;
    protected $password;
    public $discount = 20;

    public function __construct($name, $surname, $username, $password){

        parent::__construct($name, $surname);
        
        $this->username = $username;
        $this->password = SetPassword($password);
    }

    public function SetPassword($password){
        $this->password = $password;
    }
}




?>