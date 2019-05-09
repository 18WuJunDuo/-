<?php
$page =  fopen($URL,"r");
print("链接 $URL<br>");
print("<UL>");
while (!feof($page)) {
$line = fgets($page, 255);
while(ereg("HREF=\"[^\"]*\"", $line, $match)){
	print("<li>");
	print($match[0]);
	print("<br>");
}
}
print("</UL>\n");
fclose($page);
?>