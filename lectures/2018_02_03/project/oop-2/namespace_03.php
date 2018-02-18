<?php
require_once 'namespace_01.php';
require_once 'namespace_02.php';
$obj1 = new ns1\User();
$obj2 = new ns2\User();

$obj1->display();
$obj2->display();
?>