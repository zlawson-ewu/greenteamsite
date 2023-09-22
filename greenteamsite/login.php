<!DOCTYPE html>

<?php
	//login.php
	
	//connection
	include("connection.php");
	session_start();
	
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$query = "select * from user where user = '".$username."' and password = '".$password."'";
		
		$result = mysqli_query($conn, $query);
		$success = '';
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_row($result);
			$ad = "admin";
			$_SESSION["username"] = $username;
			if (strcmp($row[3], $ad) == 0) {
				$_SESSION["auth"] = "true";
				header("Location: admin.php");
			}
			$success = "Welcome, $username.";
		}
		else {
			$success = "Invalid Username or Password";
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
	
		<?php include 'header.php'; ?>
		
		<div id="main">
			<div id="inner">
				<form action="" method="post">
					<table id="logincreds">
						<tr>
							<td>
								<h3>Account Login</h3>
							</td>
						</tr>
						<tr>
							<td>
								<input name="username" type="text" placeholder="Username"/>
							</td>
						</tr>
						<tr>
							<td>
								<input name="password" type="password" placeholder="Password"/>
							</td>
						</tr>
						<tr>
							<td>
								<p><?php echo $success ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit" value="Submit"/>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		
		<?php include 'footer.php' ?>
		
	</body>
</html>
