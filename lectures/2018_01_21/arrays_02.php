<?php
//associative/referenced array

//$data = [20=>101, 'evs', 'lahore'];
//$data = [101, 'company'=>'evs', 11=>'lahore'];
//key=>value
$data = ['id'=>101, 'company'=>'evs', 'city'=>'lahore'];

$data['country'] = "Pakistan";
$data['capital'] = "Islamabad";

/*
echo("<pre>");
print_r($data);
echo("</pre>");
*/

//echo("Capital : " . $data["CAPITAL"]);
//echo("Capital : " . $data["capital"]);
//echo("Capital : " . $data['capital']);
//echo("Capital : $data['capital']");
echo("Capital : $data[capital]");


















?>