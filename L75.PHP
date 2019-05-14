<?php
print("<HTML>\n");
print("<HEAD>\n");
print("<TITLE>检查一个邮政编码</TITLE>\n");
print("</HEAD>\n");
print("<BODY>\n");
if(isset($zip))
{
    if(ereg("^([0-9]{6})(-[0-9]{5})?$", $zip))
{
print("$zip 是一个正确的邮政编码。<BR>\n");
    
else
{
    print("$zip <B>不是</B> 一个正确的邮政编码<BR>\n");
}
}
print("<FORM ACTION=\"L75.php\">\n");
print("<INPUT TYPE=\"text\" NAME=\"zip\">\n");
print("<INPUT TYPE=\"submit\">\n");
print("</FORM>\n");
print("</BODY>\n");
print("</HTML>\n");
?>