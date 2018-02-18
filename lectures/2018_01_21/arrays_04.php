<?php
/*
$data = [101, 'evs', 'lahore'];
$data[] = "Pakistan";
$data[] = "Pakistan";
$data[] = "Pakistan";
$data[] = "Pakistan";
*/


$data = ['id'=>101, 'company'=>'evs', 'city'=>'lahore'];

$data['country'] = "Pakistan";
$data['capital'] = "Islamabad";

//foreach($data as $value)
foreach($data as $key=>$value)
{
//	echo($value . "<br>");
	echo(ucfirst($key) . " - " . ucfirst($value) . "<br>");
}
//lcfirst
//strtolower
//strtoupper
//ucwords















?>