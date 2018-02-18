<?php
//Regular Expression
$data = "EVS Learning Instaitute. EVS and EVS. EVS Lahore";
$reg = "/EVS/";
//$reg = "/\s[a-z]{3}\s/i";

$matches = [];
//$result = preg_match($reg, $data);
//$result = preg_match($reg, $data,$matches);
//$result = preg_match($reg, $data,$matches,PREG_OFFSET_CAPTURE);
//$result = preg_match($reg, $data,$matches,PREG_OFFSET_CAPTURE,20);
//$result = preg_match($reg, $data,$matches,PREG_OFFSET_CAPTURE,20);

//preg_match
//preg_match_all
//preg_replace
//preg_split

//$result = preg_match_all($reg, $data, $matches);
//$result = preg_match_all($reg, $data, $matches, PREG_OFFSET_CAPTURE);
//$result = preg_match_all($reg, $data, $matches, PREG_OFFSET_CAPTURE, 10);

echo($result);
echo("<pre>");
print_r($matches);
echo("</pre>");
?>



