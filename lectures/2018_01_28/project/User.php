<?php

class User {

    //data members, always private
    private $user_name;
    private $password;
    private $date_of_birth;

    public function __construct() {
        
    }

    public function __set($name, $value) {
        $method = "set$name";
        if (!method_exists($this, $method)) {

            throw new Exception("SET Property $name does not exist");
        }
        $this->$method($value);
    }

    public function __get($name) {
        $method = "get$name";
        if (!method_exists($this, $method)) {
            throw new Exception("GET Property $name does not exist");
        }
        return $this->$method();
    }

    private function getUser_name(): string {
        return $this->user_name;
    }

    private function getPassword(): string {
        return $this->password;
    }

    private function getDate_of_birth(): string {

        $date_of_birth = date("d-m-Y", $this->date_of_birth);
//                echo($date_of_birth . "<br>");
        return $date_of_birth;
    }

    private function getDay(): int {

        $date_of_birth = date("d", $this->date_of_birth);
//                echo($date_of_birth . "<br>");
        return $date_of_birth;
    }
    
    private function getMonth(): int {

        $date_of_birth = date("m", $this->date_of_birth);
//                echo($date_of_birth . "<br>");
        return $date_of_birth;
    }
    
    private function getYear(): int {

        $date_of_birth = date("Y", $this->date_of_birth);
//                echo($date_of_birth . "<br>");
        return $date_of_birth;
    }
    
    
    
    private function setUser_name(string $user_name) {
        $reg = "/^[a-z][a-z0-9]{5,19}$/i";
        if (!preg_match($reg, $user_name)) {
            throw new Exception("*Invalid/Missing user Name");
        }
        $this->user_name = $user_name;
    }

    private function setPassword(string $password) {
        $reg = "/^[a-z][a-z0-9]{5,15}$/i";
        if (!preg_match($reg, $password)) {
            throw new Exception("*Invalid/Missing Password");
        }
        $this->password = $password;
    }

    private function setDate_of_birth(string $date_of_birth) {

        if (empty($date_of_birth)) {
            throw new Exception("Missing Date Of Birth");
        }

        $reg = "/^\d{2}\-\d{2}\-\d{4}$/";
        if (!preg_match($reg, $date_of_birth)) {
            throw new Exception("*Invalid Date FOrmat");
        }
        
        $date_parts = explode("-", $date_of_birth);
        list($day, $month, $year) = $date_parts;

//        echo("<pre>");
//        print_r($year);
//        echo("</pre>");
//        die;
//        if(checkdate($date_parts[1], $date_parts[0], $date_parts[2])){
        if (!checkdate($month, $day, $year)) {
            throw new Exception("*Invalid Date Of Birth");
        }
        
        
//        $this->date_of_birth = $date_of_birth;
//        $this->date_of_birth = strtotime($date_of_birth);
        $this->date_of_birth = mktime(0, 0, 0, $month, $day, $year);
//        echo($this->date_of_birth . "<br>");
    }

    public function login(){
        
    }
}

//create an object of class User
//instantiate  an object of class User


$obj_user = new User();

/*
try {
    $obj_user->user_name = "123";
    echo("User Name : $obj_user->user_name<br>");
} catch (Exception $ex) {
    echo("Msg : " . $ex->getMessage() . "<br>");
    echo("Line : " . $ex->getLine() . "<br>");
    echo("File : " . $ex->getFile() . "<br>");
}

try {
    $obj_user->password = "12rfds";
    echo("Password : $obj_user->password<br>");
} catch (Exception $ex) {
    echo("Msg : " . $ex->getMessage() . "<br>");
    echo("Line : " . $ex->getLine() . "<br>");
    echo("File : " . $ex->getFile() . "<br>");
}
*/

try {
    $obj_user->date_of_birth = "28-01-2018";
    echo("Date Of Birth : $obj_user->date_of_birth<br>");
    echo("Day : $obj_user->day<br>");
    echo("Month : $obj_user->month<br>");
    echo("Year : $obj_user->year<br>");
} catch (Exception $ex) {
    echo("Msg : " . $ex->getMessage() . "<br>");
    echo("Line : " . $ex->getLine() . "<br>");
    echo("File : " . $ex->getFile() . "<br>");
}
?>