<?php
	session_start();
	if(!isset($_SESSION['login'])) {
		header('LOCATION:login-success.php'); die();
	}
?>
<html>
	<head>
		<title>Successful login page</title>
	</head>
	<body>
		Only viewable by logged in users. Congrats I guess.
		<div></div>
		<a href="http://users.jyu.fi/~laeejoha/logout.php">Logout</a> <br>
	</body>
</html>