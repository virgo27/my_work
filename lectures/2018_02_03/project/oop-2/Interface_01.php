<?php

interface ParentIA {
    public function display();
    public function display2(int $num) : string;
}

class ChildA implements ParentIA{
    
    public function display() {
        
    }

    public function display2(int $num): string {
        
    }

}

?>