<?php

class ParentA {
    //available outside of the class 
    //inherit in child class
    public $public_data; //both yes
    private $private_data; //both no
    protected $protected_data;   //only inherit

}

class ChildA extends ParentA {
    public function display(){
        
    }
}

$p = new ParentA();
$c = new ChildA();














?>