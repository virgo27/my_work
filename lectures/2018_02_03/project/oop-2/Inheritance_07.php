<?php

final class ParentA {
    public function display(){
        
    }

}

class ChildA extends ParentA {
    public function display() {
        //to do later
    }

}

$p = new ParentA();
$c = new ChildA();
$p->display();
$c->display();













?>