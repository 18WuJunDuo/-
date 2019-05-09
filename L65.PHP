<?php
$username = "wuJunDuo";
if(isset($username)){
	session_name($username);
}
echo"你的名字是".session_name()."<br>";
?>



<!--  
<?php
echo"输入你的名字";
?>

<?php
if($_POST){
    $name = $_POST["name"];
        echo ("<br>"."好的，我知道你的名字了，是："."$name");
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Document</title>
 </head>
 <body>
   <form action="L65.php" method="post">
       <input type="text" name="name">
       <input type="submit" name="" value="提交">
   </form>
 </body>
 </html>
 -->