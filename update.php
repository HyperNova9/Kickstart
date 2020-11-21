<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstart");
	$text_querys = "UPDATE posts
SET title='{$_POST["title"]}', description='{$_POST["description"]}', goal ='{$_POST["goal"]}', img='{$_POST["img"]}'
WHERE id = '{$_POST["id"]}' ";
$querys = mysqli_query($con, $text_querys);
header("location:acc.php?user=".$_POST["user"]."");
 ?>