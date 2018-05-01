<?php
	session_start();
	if(!isset($_SESSION['login'])) {
		header('LOCATION:login-success.php'); die;
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css" >
		<title>Successful login page</title>
	</head>
	<body>
		Only viewable by logged in users. Congrats I guess. <br>
		<a id="sucLoginLogoutButton" href="http://users.jyu.fi/~laeejoha/logout.php">Logout</a> <br>
	</body>
</html>