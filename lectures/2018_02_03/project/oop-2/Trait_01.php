<?php
trait DBTrait{
    private function display(){
        echo("Display called<br>");
    }
}

class Product{
    use DBTrait;
    public function check(){
        $this->display();
    }
}
