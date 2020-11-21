<?php
	$con = mysqli_connect('127.0.0.1', 'root', "", "kickstarter");
	$id = $_GET["id"];
	$donated = $_GET["donated"] + 10;
	mysqli_query($con, "UPDATE projects SET donated={$donated} WHERE id={$id}");
	header('Location: index.php');
?>