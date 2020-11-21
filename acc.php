<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 

$con = mysqli_connect("127.0.0.1", "root", "", "kickstart");

$text_query = "SELECT * FROM posts WHERE user = '{$_GET["user"]}'";
$query = mysqli_query($con, $text_query);
 ?>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="gap.php" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-5 mx-auto">
	<form action="insertProject.php" method="POST">
		<p><input class="col-12" type="" name="title" placeholder="Заголовок"></p>
		<textarea class="col-12" name="description"></textarea>
		<p><input class="col-12" type="" name="goal" placeholder="Необходимая сумма"></p>
		<p><input class="col-12" type="" name="img" placeholder="Обложка"></p>
		<p><input class="col-12" type="" name="place" placeholder="Страна"></p>
		<p><input style="" class="col-12" type="" name="user" placeholder="user" value="<?php echo $_GET["user"] ?>"></p>
		<p>User: <?php echo $_GET["user"] ?></p>
		<button class="col-12 btn btn-success">Добавить</button>
	</form>
</div>
<?php
		for ($i=0; $i<$query->num_rows; $i++) {
		$stroka = $query->fetch_assoc();
	 ?>
		<div class="col-8 mx-auto mt-5 pb-3">
			<div class="row">
				<div class="col-6">
					<img src="<?php echo $stroka["img"] ?>" class="w-100">
					<h3><?php echo $stroka["title"]; ?></h3>
					<p><?php echo $stroka["description"] ?></p>
					<p>by <?php echo $stroka["user"] ?> from <?php echo $stroka["place"] ?></p>
				</div>
				<div class="col-6">
					<p class="mt-5"><?php echo $stroka["goal"] ?> goal</p>
					<p class="text-success"><?php echo $stroka["donated"] ?> pledged</p>
					
					<form action="kick.php" method="POST">
						<input style="display:none" type="" name="title" value="<?php echo $stroka["title"]; ?>">
						<input style="display:none" type="" name="description"  value="<?php echo $stroka["description"]; ?>">
						<input style="display:none" type="" name="goal" value="<?php echo $stroka["goal"]; ?>">
						<input style="display:none" type="" name="img" value="<?php echo $stroka["img"]; ?>">
						<input style="display:none" type="" name="id" value="<?php echo $stroka["id"]; ?>">
						<input style="display:none" type="" name="users" value="<?php echo $stroka["user"]; ?>">
						<button class="btn btn-success col-12">Редактировать</button>
					</form>
					<form action="delete.php" method="POST">
						<input style="display:none" type="" name="delete" value="<?php echo $stroka["id"]; ?>">
						<input style="display:none" type="" name="userss" value="<?php echo $stroka["user"]; ?>">
						<button class="btn btn-danger col-12">Удалить пост</button>
					</form>
				</div>
			</div>
			
			
		</div>

		<!--Вывести сами проекты здесь-->
		<?php };  ?>
</body>
</html>