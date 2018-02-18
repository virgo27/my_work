<?php

class User {
    //data members, always private
    private $user_name;
    private $password;
        
    
    public function __construct() {
        //echo("construct called<br>");
//        called when object is created
    }
    public function __set($name, $value) {
//        echo("set called<br>");
        echo("Name - $name<br>"
                . "Value - $value<br><hr>");
    }    
    
    public function __get($name) {
//        echo("get called<br>");
        echo("Name - $name<br><hr>");
        
    }
    
    private function getUser_name() {
        return $this->user_name;
    }

    private function getPassword() {
        return $this->password;
    }

    private function setUser_name($user_name) {
        $this->user_name = $user_name;
    }

    private function setPassword($password) {
        $this->password = $password;
    }

    
}

//create an object of class User
//instantiate  an object of class User


$obj_user = new User();

$obj_user->user_name = "123";
//die;

echo("$obj_user->user_name<br>");

$obj_user->password = "12rfds";
echo("$obj_user->password<br>");









?>