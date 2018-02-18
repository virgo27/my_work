<?php
date_default_timezone_set("Asia/Karachi");
//$date = date("d");
//$date = date("l, F dS Y h:i:s a");
//echo($date);

//$ts = time();
$ts = mktime(0, 0, 0, 6, 20, 1987);

$date = getdate($ts);
echo("TS - $ts<pre>");
print_r($date);
echo("</pre>");
?>