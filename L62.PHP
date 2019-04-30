<?
print("开始时间；".microtime()."<br>");

for($index = 0; $index < 10; $index++)
{
    print("tick");
}
print("<br>"."停止:".microtime()."<br>");
?>
<?
$CurrentHour = date("h");
prit("从现在开始50小时以后为：");
print(date("h:i a l F dS, Y",
mktime($CurrentHour+50)));
print("<br>");
?>
<?
$CurrentTime = time();
print($CurrentTime);
?>