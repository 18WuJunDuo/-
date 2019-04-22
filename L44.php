<?php
    $myFile = file( "File.txt");
for($index = 0; $index < count($myFile); $index++)
{
    print($myFile[$index]."<BR>");
}
?>