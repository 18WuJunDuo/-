<?php
    $LastAccess = fileatime("File.txt");
    print("文件最后的存取时间为：");
    print(date("l F d, Y", $LastAccess));
    print("<br>");
?>
<?php
    $LastA = filectime("File.txt");
    print("文件最后的改变时间：");
    print(date("l F d, Y", $LastA));
    print("<br>");
?>
<?php
    $LastB = filemtime("File.txt");
    print("文件最后的修改时间：");
    print(date("l F d, Y", $LastB));
    print("<br>");
?>   
<!--运行错误-->