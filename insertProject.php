<?php
	$title = $_GET["title"];
	$description = $_GET["description"];
	$goal = $_GET["goal"];
	$user = $_GET["user"];
	$img = $_GET["img"];
	$place = $_GET["place"];
	$con = mysqli_connect('127.0.0.1', 'root', "", "kickstarter");
	mysqli_query($con, "INSERT  INTO projects (title, desription, goal, img, user, place, donated) VALUES ('{$title}', '{$description}', '{$goal}', '{$img}', '{$user}', '{$place}',0)");
	 header('Location: acc.php');
?>