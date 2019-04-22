<?php
print("<table border=\"1\">\n");
print("<tr><font color='red'>\n");
print("<th>文件名</th>\n");
print("<th>文件的大小</th>\n");
print("</font></tr>\n");
$myDirectory = opendir("."); 
while($entryName = readdir($myDirectory))
{
    print("<tr>");
    print("<td>$entryName</td>");
    print("<td align=\"right\">");
    print(filesize($entryName));
    print("</td>");
    print("</tr>\n");
}
closedir($myDirectory); 
print("</table>\n");
?>