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
    // Set new custome session ID
    //session_id($newid);
    // Start with custom session ID
    session_start();
}

// Make sure use_strict_mode is enabled.
// use_strict_mode is mandatory for security reasons.
ini_set("session.use_strict_mode", 1);
//ini_set("display_errors", 1);
my_session_start();

// Session ID must be regenerated when
//  - User logged in
//  - User logged out
//  - Certain period has passed
my_session_regenerate_id();

// Write useful codes
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta settings -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css" >
		<title>Lassin kotisivut</title>
	</head>
		
		
		<!-- Site navigation -->
		<!-- 
		<nav class="w3-bar w3-black">
			<a href="#home" class="w3-button w3-bar-item">Home</a>
			<a href="#band" class="w3-button w3-bar-item">Band</a>
			<a href="#tour" class="w3-button w3-bar-item">Tour</a>
			<a href="#contact" class="w3-button w3-bar-item">Contact</a>
		</nav>
		-->

	<body>
		<section id="Pictures">
			<h2>
				<img alt="Atlas mech" class="frontPageSlides" src="Pictures/Atlas.jpg" style="width:172px;height:108px">
				<img alt="Highlander mech" class="frontPageSlides" src="Pictures/highlander.jpg" style="width:172px;height:108px">
				<img alt="Timberwolf mech" class="frontPageSlides" src="Pictures/Timberwolf.jpg" style="width:172px;height:108px">
			</h2>
		</section>
		
		<h1>Lassin kotisivut (laeejoha)</h1>
		<div id="EtusivunLinkit">
			<h2> Linkit </h2>
			<a href="http://users.jyu.fi/~laeejoha/aboutAuthor.php">Tietoja minusta</a> <br>
			<a href="http://users.jyu.fi/~laeejoha/Courses">Omat tiedostot</a> <br>
			<a href="http://users.jyu.fi/~laeejoha/PHPLoginPractice.php">PHP Practice login page</a> <br>
		</div>
	</body>
</html>