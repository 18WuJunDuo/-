<?php
$users = array("bob"=>"Yobert","steve"=>"Btephen","jon"=>"Aonathon");
for(reset($users); $index=key($users);next($users))
{
	print("$index : $users[$index]<br>");
}
print("<hr>");
asort($users);
for(reset($users);$index=key($users);next($users));
{
	print("$index : $users[$index]<br>");
}
?>