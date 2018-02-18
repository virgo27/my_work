<?php
class StaticTest{
    //constant member
    private static $sdata = 0;
    private $data;
    public function display(){
        echo("Data - $this->data<br>");
        echo("SData - " . self::$sdata . "<br>");
    }
    
    public function change(int $data, int $sdata){
        $this->data = $data;
        self::$sdata = $sdata;
    }
}

$s1 = new StaticTest();
$s2 = new StaticTest();
$s3 = new StaticTest();
$s4 = new StaticTest();
$s5 = new StaticTest();
$s6 = new StaticTest();
$s3->change(200, 30);
$s4->change(300, 40);
$s5->change(400, 50);
$s6->change(500, 60);
$s1->change(10, 20);
$s2->display();





?>