<!DOCTYPE html><meta charset="utf-8">
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		$con = mysqli_connect('127.0.0.1', 'root', "", "kickstarter");
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
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><?php echo $numrows?> projects<!--Вывести количество проектов--></span></h4>
	<a class="text-primary font-weight-bold" href="acc.php">Account</a>
	<p></p>
	<div class="row mt-5">
		<?php 
		for ($i=0; $i<3; $i++) { 
			$result = $q->fetch_assoc();
		?>
		<div class="col-3 border ml-2" style="background-size: cover; background-position: center; background-image: url(<?php echo $result["img"]?>); height: 200px;">
			<p class="" style="margin-top: 200px; font-size: 20px;"><?php echo $result["title"]?></p>
			<p class="" style="font-size: 15px;"><?php echo $result["desription"]?></p>
			<p class="" style="">by <?php echo $result["user"]?>, <?php echo $result["place"]?></p>
			<p class="" style=""><?php echo $result["goal"]?>$ goal</p>
			<p class="text-success" style=""><?php echo $result["donated"]?>$ pledged</p>
			<form method="GET" action="updateDonate.php">
				<input type="" style="display: none;" name="id" value=<?php echo $result["id"]?>>
				<input type="" style="display: none;" name="donated" value=<?php echo $result["donated"]?>>
				<button class="btn bg-success text-white">Back this project +10$</button>
			</form>
		</div>

		<!--Вывести сами проекты здесь-->
		<?php } ?>
			<?php 
		for ($i=0; $i<3; $i++) { 
			$result = $q->fetch_assoc();
		?>
		<div class="col-3 border ml-2" style="background-size: cover; background-position: center; background-image: url(<?php echo $result["img"]?>); height: 200px;">
			<p class="" style="margin-top: 200px; font-size: 20px;"><?php echo $result["title"]?></p>
			<p class="" style="font-size: 15px;"><?php echo $result["desription"]?></p>
			<p class="" style="">by <?php echo $result["user"]?>, <?php echo $result["place"]?></p>
			<p class="" style=""><?php echo $result["goal"]?>$ goal</p>
			<p class="text-success" style=""><?php echo $result["donated"]?>$ pledged</p>
			<form method="GET" action="updateDonate.php">
				<input type="" style="display: none;" name="id" value=<?php echo $result["id"]?>>
				<input type="" style="display: none;" name="donated" value=<?php echo $result["donated"]?>>
				<button class="btn bg-success text-white">Back this project +10$</button>
			</form>
		</div>

		<!--Вывести сами проекты здесь-->
		<?php } ?>
	</div>
	

</div>
</body>
</html>