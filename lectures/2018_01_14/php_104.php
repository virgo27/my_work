<?php
$data = 1111;

unset($data);
if(isset($data)){
	echo($data);
}
else{
	echo("Undefined");
}

?>