<?
    // 打开文件同时打印文件的每一个字符
    if($myFile = fopen("data.txt", "r"))
    {
    while(!feof($myFile))
    {
        $myCharacter = fgetc($myFile);
        print($myCharacter);
    }
    fclose($myFile);
    }   
?>
<? print("<hr>");?>
<?
    // 打开文件同时打印文件的每一行
    if($myFile = fopen("data.txt", "r"))
    {
        while(!feof($myFile))
        {
            $myLine = fgets($myFile, 255);
            print($myLine);
        }
    fclose($myFile);
    }   
?>
<? print("<hr>");?>
<?
    /* 打开文件同时打印文件的每一行,
    同时去掉取回字符串中的 HTML 语言
    */
    if($myFile = fopen("data.txt", "r"))
    {
        while(!feof($myFile))
        {
            $myLine = fgetss($myFile, 255);
            print($myLine);
        }
        fclose($myFile);
    }   
?>