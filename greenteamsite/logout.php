<?php
	include("connection.php");
	session_start();
?>
<html>
	<head>
	
	</head>
	<body>
		<?php 
			if (session_destroy()) {
				header("Location: login.php");
			}
		?>
	</body>
</html>
