<?php
$text = "My dog's name is Angus";
print(substr($text,17,5) . "<hr>");
$line = "leon\tatkinson\tleon@clearink.com";
for($token = strtok($line,"\t");
    $token !="";
    $token = strtok("\t"))
{
	print("token: $token<br>");
}
?>
<?
$text = "Although this is string, it's not very long.";
print("<hr>".strstr($text,","));
?>