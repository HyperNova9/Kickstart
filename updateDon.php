<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstart");
	$d = $_POST["donated"];
	$d = $d + 10;

	$text_querys = "UPDATE posts
	SET donated = '$d'
	WHERE id = '{$_POST["id"]}' ";
	$querys = mysqli_query($con, $text_querys);
	header("location: index.php");
 ?>