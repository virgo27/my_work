<?php
class StaticTest{
    //constant member
    private static $sdata = 0;
    private $data;
    public function __construct() {
        $this->data = 0;
    }
    public function display(){
        echo("Data - $this->data<br>");
        echo("SData - " . self::$sdata . "<br>");
    }
    public static function sdisplay(){
        echo("Data - $this->data<br>");
        echo("SData - " . self::$sdata . "<br>");
    }
    
}

$s1 = new StaticTest();
$s2 = new StaticTest();
//$s1->display();
//$s2->display();
$s1->sdisplay();
//$s2->sdisplay();

?>