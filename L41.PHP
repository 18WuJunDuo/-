<?php
print("<h3>通过http协议打开文件</h3><br>");
if(!($myFile = fopen("File.txt", "r")))
{
	print("文件不能打开");
	exit;
}
    while(!feof($myFile))
{
    $myLine = fgetss($myFile, 255);
    print("$myLine <BR>\n");
}
fclose($myFile);
?>