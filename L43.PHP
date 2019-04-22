<?php
    print("文件的所有者（UID 值）：");
    print(fileowner("File.txt") . "<br>");
    print("文件的大小：");
    print(filesize("File.txt") . "<br>");
    print("文件的类型：");
    print(filetype("File.txt") . "<br>");
?>