<?php
$colors = array("red","blue","green");
if(is_array($colors))
{
    print("colors is an array" . "<br>");
}
$Temperature = 15.23;
if(is_double($Temperature))
{
     print("Temperature is a double" . "<br>");
}
$PageCount = 2234;
if(is_integer($PageCount))
{
	print("$PageCount is an intger" . "<br>");
}
$Greeting = "Hello";
if(is_string($Greeting))
{
	print("Greeting is a string" . "<br>");
}
?>