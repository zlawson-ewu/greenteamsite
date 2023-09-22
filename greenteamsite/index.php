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
			<div id="panels">
				<img src="solarpanels.png" height=auto width=80%/>
			</div>
			<div id="data">
				<table>
					<tr>
						<th colspan=2>
							<p>Sonnenberg Fields</p>
						</th>
					</tr>
					<tr>
						<td>List of arrays</td>
						<td>Power Generation</td>
					</tr>
				</table>
			</div>
		</div>
		
		<?php include 'footer.php' ?>
		
	</body>
</html>
