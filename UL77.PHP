<!DOCTYPE html>
<html>
<head>
	<title>查看句子中单词个数</title>
</head>
<body>
<?php
if(isset($sentence))
{
     print("<b>得到的语句</b>");
     print("$sentence<br><br>");
     $separators= "";
     for($token = strtok($sentence,$separators);
     $token;
     $token = strtok($sentence))
     {
     $word_count[$token]++;
     $total++;
     }
     arsort($word_count);
     print("<b>找到$total个单词</b>");
     print("<ul>");
     while(list($key,$value) = each($word_count))
     {
     	print("<li>$key($value)");
     }
     print("</ul>");
}
print("<form action=\"L77.php\">\n");
print("<INPUT NAME=\"sentence\" SIZE=\"10\">\n");
print("<INPUT TYPE=\"submit\" VALUE=\"提交\">\n");
print("</FORM>\n");
?>
</body>
</html>