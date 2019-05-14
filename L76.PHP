<HTML>
<HEAD>
<TITLE>得到十个随机数</TITLE>
</HEAD>
<BODY>
<BR>
<FONT SIZE=5>
<?php
    srand(time());
    for($index = 0; $index < 10; $index++)
    {
        $number = (rand()%100)+1;
        print("$number   \n");
    }
?>
</FONT>
</BODY>
</HTML>