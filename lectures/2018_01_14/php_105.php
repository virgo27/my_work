<?php
/*
when a number and string are comapred, PHP implictly converts(type-cast) the string into number

if that was a numeric string, the type casting is ok
if that was an alpha-numeric string, it is converted to 0
*/

$data1 = 20;
//$data1 = "aaa";

//$data2 = 20;
$data2 = "20";
//$data2 = 10;
//$data2 = "sss";
//$data2 = 0;

//if($data1 == $data2)
if($data1 === $data2)
{
	echo("$data1 and $data2 are same");
}
else{
	echo("$data1 and $data2 are different");
}







?>