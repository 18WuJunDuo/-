<H3>编码和解码函数</H3>
<?php
$data="VGhpcyBpcyBhIAptdWx0aS1saW5lIG1lc3NhZ2UK";
print($data);
print(base64_decode($data));
?>
<?php
print("<hr>");
$text = "这是一个多行信息\n";
print($text);
print(base64_encode($text));
?>