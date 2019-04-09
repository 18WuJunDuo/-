<?php
function write($text)
{
	print($text);
}

function writeBold($text)
{
    print("<b>$text</b>");
}

$myFunction = "write";
$myFunction("你好!<br>");


?>