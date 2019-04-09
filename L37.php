<?php
print("<html>"."<br>");
print("<head>"."<br>");
print("<title>改变背景颜色</title>"."<br>");
print("</HEAD"."<br>");
if($inputColor == "")
{
	$inputColor = "FFFFFF";
}
print("<BODY BGCOLOR=\"#$inputColor\>."<BR>"")
print("<b>请填写HTML颜色代码:"."<br>");
print("<input");
print("type=\"text\"");
print("NAME=\"inputColor\"");
print("value=\"$inputColor\"");

print("<INPUT ");
print("TYPE=\"submit\"");
print("NAME=\"Submit_Button\"");
print("VALUE=\"提交颜色\">");
print("</FORM>"."<br>");
print("</BODY>"."<br>");
print("</HTML>"."<br>");
?>