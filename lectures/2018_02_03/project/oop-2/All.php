<?php
trait DBTrait{
    private function display(){
        echo("Display called<br>");
    }
}

class ParentA{
    
}

interface ParentIA {
    public function display();
    public function display2(int $num) : string;
}

interface ParentIB {
    public function display3();
    public function display4(int $num) : string;
}

class ChildA extends ParentA implements ParentIA, ParentIB{

    use DBTrait;
    
    public function display() {
        
    }

    public function display2(int $num): string {
        
    }

    public function display3() {
        
    }

    public function display4(int $num): string {
        
    }

}

?>