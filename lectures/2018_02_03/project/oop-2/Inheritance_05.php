<?php

class ParentA {
    public final function display(){
        echo("Display of parent called<br>");
    }

}

class ChildA extends ParentA {
    //re-define an inherited function
    public function display() {
        parent::display();
        echo("Display of child called<br>");
    }
}

$p = new ParentA();
$c = new ChildA();
$p->display();
$c->display();













?>