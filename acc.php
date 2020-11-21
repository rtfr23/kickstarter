<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<form method="GET" action="acc.php">
		<input type="" name="val" class="mx-auto col-4 form-control mt-2" placeholder="User">
		<button class="btn bg-success mt-2 text-white col-4" style="margin-left: 630px;">Искать</button>
	</form>
	<?php
		$con = mysqli_connect('127.0.0.1', 'root', "", "kickstarter");
		$val = $_GET["val"];
		$query = mysqli_query($con, "SELECT * FROM projects WHERE user='{$val}'");
		$q = mysqli_query($con, "SELECT * FROM projects");
		$numrows = mysqli_num_rows($q);
	?>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<a href="index.php"><img src="logo.png" class="w-25"></a>
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-12">
	<form method="GET" action="insertProject.php">
		<input type="" name="title" class="mx-auto col-4 form-control" placeholder="Заголовок">
		<textarea type="" name="description" class="mx-auto col-4 form-control mt-2" placeholder="Описание"></textarea>
		<input type="" name="goal"  class="mx-auto col-4 form-control mt-2" placeholder="Сумма (Только сумма)">
		<input type="" name="img" class="mx-auto col-4 form-control mt-2" placeholder="Обложка">
		<input type="" name="place" class="mx-auto col-4 form-control mt-2" placeholder="Город">
		<input type="" name="user" class="mx-auto col-4 form-control mt-2" placeholder="User">
		<button class="btn bg-success mt-2 text-white col-4" style="margin-left: 630px;">Добавить</button>
	</form>
</div>
<div class="row mt-5">
		<?php $result = $query->fetch_assoc();?>
		<div class="col-3 border ml-2" style="background-size: cover; background-position: center; background-image: url(<?php echo $result["img"]?>); height: 200px;">
			<p class="" style="margin-top: 200px; font-size: 20px;"><?php echo $result["title"]?></p>
			<p class="" style="font-size: 15px;"><?php echo $result["desription"]?></p>
			<p class="" style="">by <?php echo $result["user"]?>, <?php echo $place?></p>
			<p class="" style=""><?php echo $result["goal"]?>$ goal</p>
		</div>
	</div>
</body>
</html>