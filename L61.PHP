<?php
print(date("h:i A l"));
print("<br>");
print(date("F dS, Y"));
?>
<?
$current_date = gerdate(time());
print("<hr>");
printf("%d:%d:%d",$current_date["hours"],
	$current_date["minutes"],
	$current_date["srconds"]);
?>