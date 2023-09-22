<div id="header">
<?php
	$loginpage = "login.php";
	$login = "Login";
	if(isset($_SESSION["auth"])) {
		$loginpage = "admin.php";
		$login = "Admin";
	}
	else if(isset($_SESSION["username"])) {
		$loginpage = "logout.php";
		$login = "Logout";
	}
	$thispage = basename($_SERVER['PHP_SELF']);
	if (strcmp($thispage, "admin.php") == 0) {
		$loginpage = "logout.php";
	}
?>
	<table>
		<tr>
			<td><a href="index.php"><img src="solislogo.png"/></a></td>
			<td><a href="contact.php">Contact Us</a></td>
			<td><a href="manufacturing.php">Manufacturing</a></td>
			<td><a href="generation.php">Solar Generation</a></td>
			<td><a href="<?=$loginpage?>"><?php echo $login ?></a></td>
		</tr>
	</table>
</div>
