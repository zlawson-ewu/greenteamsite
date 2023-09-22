<!DOCTYPE html>

<?php
	include("connection.php");
	session_start();
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
	
		<?php include 'header.php'; ?>
		
		<div id="main">
			<div id="inner">
				<div id="info">
					<h2>Contact <br>Information</h2>
					<p>Welcome to Sole-Zon-Solis Energy, we are happy to answer any questions you might have about our services. Please fill out the contact us form and we will get back to you shortly.</p><br>
					<p>Phone Number</p><br>
					<p>Email Address</p><br>
				</div>
				<div id="input">
					<form action="" method="post">
						<h3>Contact Us Form</h3>
						Name: <input name="name" type="text" /> <br><br>
						Email: <input name="email" type="text" /> <br><br>
						Phone: <input name="phone" type="text" /> <br><br>
						<input type="file" /> <br><br>
						<input type="submit" value="Submit" />
					</form>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php' ?>
		
	</body>
</html>
