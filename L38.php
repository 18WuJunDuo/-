<?php
if(isset($UploadedFile))   //这个if不懂
{
print("本地 File: $UploadedFile <br>");
print("名称：$UploadedFile_name <br>");
print("大小：$UploadedFile_size <br>");
print("类型：$UploadedFile_type <br>");
print("<HR>");
}
?>
<form enctype="multipart/form-data" action="38.php" ="38.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="4096">
<input type="File" name="UploadedFile" size='15'>
<input type="submit" value="上传文件">
</form>