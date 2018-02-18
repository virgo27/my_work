<?php
class ConstTest{
    //constant member
    const data = 20;
    public $name;
    public function display(){
//        echo(ConstTest::data);
        echo(self::data);
    }
}
$c = new ConstTest();
$c2 = new ConstTest();
$c->name = "ali";
$c2->name = "ahned";
echo(ConstTest::data);



?>