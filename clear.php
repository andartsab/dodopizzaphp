<?php
	$con = mysqli_connect("MySQL-8.2","root","","dodo");
	mysqli_query($con, "DELETE FROM orders");
	header("Location: https://dodo.local/index.php");
?>