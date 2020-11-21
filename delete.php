<?php

	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstart");
	$text = "DELETE FROM posts WHERE id = '".$_POST["delete"]."'";
	$tabl = mysqli_query($connect, $text);
	header("Location: acc.php?user=".$_POST["userss"]."");
 ?> 	
