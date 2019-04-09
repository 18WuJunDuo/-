<?php
print("<b>距离星期一还有几天?</b><br>");  //** b加粗 **//
print("<ol><br>");
for($currentDate = date("U");

date("l",$currentDate) !="Monday";

$currentDate += (60*60*24));

{
	print("<LI>".date("l",$currentDate)."<br>");
	
}
print("</OL><br>");
?>