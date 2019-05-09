<?php    
$Hour = date("H");
$Intensity = round(($Hour/24.0)*(0xFF));
$PageColor = dechex($Intensity) . dechex($Intensity) . dechex($Intensity);

print("<BODY BGCOLOR=\"#$PageColor\">\n");
?>