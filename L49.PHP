<?php
function list_array($array)
{
while (list ($key,$value) = each($array))
{
    $str = "<b>$key:</b> $value<br><br>";
}
return $str;
}
echo "$HTTP_USER_AGENT<hr>\n";
$browser = get_browser();
print("<br>");
echo list_array((array) $browser);
?> 
<!-- 运行错误 -->