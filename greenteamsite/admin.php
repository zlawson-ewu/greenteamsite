<!DOCTYPE html>
<?php
	include("connection.php");
	session_start();

	if (isset($_SESSION["auth"])) {
		$username = $_SESSION["username"];
	}
	else {
		header("Location: login.php");
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
				<div id="blurb">
					<table>
						<tr>
							<th colspan=2>
								<p>FTP Server View</p>
							</th>
						</tr>
						<tr>
							<td>
								data from ftp here
							</td>
							<td>
								<a href="" download=""><button>Download</button></a>
							</td>
						</tr>
						<tr>
							<td>
								data from ftp here
							</td>
							<td>
								<a href="" download=""><button>Download</button></a>
							</td>
						</tr>
						<tr>
							<td>
								data from ftp here
							</td>
							<td>
								<a href="" download=""><button>Download</button></a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="inner">
				<div id="blurb">
					<table>
						<tr>
							<th>
								<p>Emails</p>
							</th>
						</tr>
						<tr>
							<td>
								data from emails here
							</td>
						</tr>
						<tr>
							<td>
								data from emails here
							</td>
						</tr>
						<tr>
							<td>
								data from emails here
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php' ?>
		
	</body>
</html>
