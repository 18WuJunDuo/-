<?php
function byname($left,$right)
{
	return(strcmp($left[0],$right[0]));
}
$employee[] = array("tom,John","Programmer",20);
$employee[] = array("jas,John","Programmer",20);
$employee[] = array("june,John","Programmer",20);
$employee[] = array("aili,John","Programmer",20);
$employee[] = array("Doe,John","Programmer",20);
$employee[] = array("Mann,Joe","Manager",35);
$employee[] = array("Smith,John","CEO",50);
$employee[] = array("Leeds,Al","President",100);
usort($employee,"byName");
$Name = "Mann,Joe";
$lower_limit = 0;
$upper_limit = count($employee) - 1;
while($lower_limit < $upper_limit)
{
$index = intval(($lower_limit + $upper_limit)/2);
if(strcmp($employee[$index][1], $Name) > 0)	
{
	$lower_limit = $index + 1;
}
elseif(strcmp($employee[$index][1], $Name) < 0)
{
	$upper_limit = $index - 1;
}
else
{
$lower_limit = $index;
$upper_limit = $index;
}
}
print("Mann, Joe 在数组中的位置："." $index<BR>\n");
?>