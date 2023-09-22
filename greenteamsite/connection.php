<?php
	$conn = mysqli_connect("localhost", "root", "") or die("Could not connect to the server");
	
	mysqli_select_db($conn, "users") or die("Could not find database");
?>
