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
	$text_query = "SELECT DISTINCT user FROM posts";
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
<div class="col-6 mx-auto">
<form action="update.php" method="POST">
	<p><input type="" name="title" value="<?php echo $_POST["title"] ?>" class="col-12"></p>
	<p><input type="" name="description" value="<?php echo $_POST["description"] ?>" class="col-12"></p>
	<p><input type="" name="goal" value="<?php echo $_POST["goal"] ?>" class="col-12"></p>
	<p><input type="" name="img" value="<?php echo $_POST["img"] ?>" class="col-12"></p>
	<p><input style="display:none" type="" name="id" value="<?php echo $_POST["id"] ?>" class="col-12"></p>
	<p><input style="display:none" type="" name="user" value="<?php echo $_POST["users"] ?>" class="col-12"></p>
	<button class="btn btn-success col-12">Редактировать</button>
</form>
</div>
</body>
</html>