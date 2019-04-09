<?php
function makeBold($inputText)
{
	$boldedText = "<b>";
	$boldedText = $inputText;
	$boldedText = "</B>";
	return($boldedText);
}
print("这行没有加重!<br>");
print(makeBold("这行加重了!!!");
print("这行没有加重!<br>").);
print("这行加重了!!!");
?>