<?php
$aspell_link=aspell_new("English");
if (aspell_check($aspell_link,"testt"))
{
echo "testt:正确的拼写";
} 
else    
{
echo "testt :是一个错误的拼写";
print("<hr>");
}
if (aspell_check($aspell_link,"test"))
{
echo "test :是一个正确的拼写";
} 
else    
{
echo "test:是一个错误的拼写";
}
?>