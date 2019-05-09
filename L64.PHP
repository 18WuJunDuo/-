<!DOCTYPE html>
<html>
<head>
	<title>图片函数</title>
</head>
<body>
<img src="316941.jpg">
<br>
<?php
$image_file = "316941.jpg";
$image_size = getimagesize($image_file);
echo("图片的宽度：". $image_size[0]."<br>");
echo("图片的高度：". $image_size[1]."<br>");
echo("文件的格式为：". $image_size[2]."<br>");
?>
</body>
</html>