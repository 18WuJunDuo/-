<?php
$colors = array("red", "green", "blue","yellow");
print("数组的个数:" . count($colors)."<br>");
print("数组的当前值:" . current($colors) . "<br>");
end($colors);
print("数组的最后一个值：" . current($colors)."<br>");
print("<hr>");
$slice = each($colors);
print("each()函数的使用:" . "<br>");
print($slice[0] . "====" . $slice[1] . "<br>");
print($slice['key'] . "====" . $slice['value'] . "<br>");
?>