<?php
print("pi=".pi());
print("<br>");
print("sin(0.5 * pi())=".sin(0.5 * pi()));
print("<br>");
print("cos(2 * pi())=".cos(2 * pi()));
print("<br>");
for($index = 0; $index < 10; $index++)
{
    print(rand(1,100) . "<BR>\n");
}
?>