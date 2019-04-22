<?php
if(mkdir("myDir1", 0777))
{
    print("目录创建成功");
}
else
{
    print("目录建立失败!");
}
?>