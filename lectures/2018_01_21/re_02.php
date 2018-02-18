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

//$result = preg_replace($reg, $rep, $data);
$result = preg_replace($reg, $rep, $data,2);




echo($result);
?>



