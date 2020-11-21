<?php
		
		$connect = mysqli_connect("127.0.0.1", "root", "", "kickstart");


		$text_query_insert = "INSERT INTO posts (title, description, goal, img, place, user)
								VALUES ('{$_POST["title"]}', '{$_POST["description"]}', '{$_POST["goal"]}','{$_POST["img"]}','{$_POST["place"]}', '{$_POST["user"]}' )";

		$query_insert = mysqli_query($connect, $text_query_insert); //запрос для ввода в таблицу

		header("Location: index.php")
	?>