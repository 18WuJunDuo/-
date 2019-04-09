
<?php
$Cities[] = "北京";
$Cities[] = "天津";
$Cities[] = "上海";
$Cities[] = "深圳";

$bbb = count($Cities);

for ($sss=0; $sss < $bbb; $sss++) { 
	echo $Cities[$sss]."<br>数组".$sss."<br><br>";
	}
?>