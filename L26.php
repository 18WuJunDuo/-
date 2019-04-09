<?php
function printBold($inputText)
{
	print("<B>".$inputText."<B>");
}
print("这行没有加重!<br>");
printBold("这行加重了!!!");
print("这行没有加重!<br>");
print("这行加重了!!!");
?>