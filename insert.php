<?php
	$con = mysqli_connect("MySQL-8.2","root","","dodo");
	mysqli_query($con, "INSERT INTO orders (name, price, img) VALUES ('{$_GET["name"]}','{$_GET["price"]}','{$_GET["img"]}')");
	header("Location: https://dodo.local/index.php");
?>