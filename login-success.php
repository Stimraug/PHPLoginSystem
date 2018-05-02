<?php
// Code adapted from http://us3.php.net/manual/en/function.session-create-id.php
// My session start function support timestamp management
function my_session_start() {
    session_start();
    // Do not allow to use too old session ID
    if (!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() - 180) {
        session_destroy();
        session_start();
    }
}

// My session regenerate id function
function my_session_regenerate_id() {
    // Call session_create_id() while session is active to 
    // make sure collision free.
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    // WARNING: Never use confidential strings for prefix!
    $newid = session_regenerate_id();
    // Set deleted timestamp. Session data must not be deleted immediately for reasons.
    $_SESSION["deleted_time"] = time();
    // Finish session
    session_write_close();
    // Make sure to accept user defined session ID
    // NOTE: You must enable use_strict_mode for normal operations.
    ini_set("session.use_strict_mode", 0);
    // Set new custom session ID
    session_id($newid);
    // Start with custom session ID
    session_start();
}

// Make sure use_strict_mode is enabled.
// use_strict_mode is mandatory for security reasons.
ini_set("session.use_strict_mode", 1);
//ini_set("display_errors", 1);
//my_session_start();

// Session ID must be regenerated when
//  - User logged in
//  - User logged out
//  - Certain period has passed
my_session_regenerate_id();

// Write useful codes

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
		Tämä sivuu näkyy vain kirjautuneille. Onneksi olkoon. <br>
		<a id="sucLoginLogoutButton" href="http://users.jyu.fi/~laeejoha/logout.php">Kirjaudu ulos</a> <br>
	</body>
</html>