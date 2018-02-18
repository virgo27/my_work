<?php
//Regular Expression
$data = "EVS Learning Instaitute. EVS and EVS. EVS Lahore";
$reg = "/ /";
//$reg = "/\s[a-z]{3}\s/i";
$rep = "-";
$matches = [];
//preg_match
//preg_match_all
//preg_replace
//preg_split

//$result = preg_split($reg, $data);
//$result = preg_split($reg, $data,2);
//$result = preg_split($reg, $data,2,PREG_SPLIT_OFFSET_CAPTURE);
$result = preg_split($reg, $data,-1,PREG_SPLIT_OFFSET_CAPTURE);


echo("<pre>");
print_r($result);
echo("</pre>");











?>



