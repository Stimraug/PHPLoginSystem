<?php
	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 
	
	// Set session max duration to 10 minutes.
	// session_set_cookie_params(600);
	
	// Initialize session and check for login
	session_start();
	$errorMsg = "I am a helpful error message. An error has been encountered.";
	$validUser = $_SESSION["login"] === true;
	if(isset($_POST["sub"])) {
		$validUser = $_POST["username"] == "hii" && $_POST["password"] == "hoo";
		if(!$validUser) $errorMsg = "Invalid username or password.";
		else $_SESSION["login"] = true;
	}
	if($validUser) {
		header("Location: login-success.php"); die();
	}
	
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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="http://users.jyu.fi/~laeejoha/index.php" />
		<link rel="stylesheet" type="text/css" href="style.css" >
		<title>PHP Login Practice</title>

    <!-- UIkit CSS -->

	</head>
    <body>
	<!-- Below code copied from https://getuikit.com/docs/form#layout and modified-->
		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" >
					<form class="uk-form-stacked" method="post">
					<h2>Kirjaudu Haybaleen <img alt="Haybale" align="middle" id="haybaleLogo" src="Pictures/Logo/hay_bale.png" style="width:172px;height:108px"></h2>
					<div class="uk-margin">
						<label class="uk-form-label" for="username-stacked-text">Käyttäjänimi(="hii")</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="username-stacked-text" type="text" required='required' 
							placeholder="Dragonborn" value="<?= $_POST["username"] ?>" name="username" />
						</div>
					</div>
					
					<div class="uk-margin">
						<label class="uk-form-label" for="password-stacked-text">Salasana (="hoo")</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="password-stacked-text" type="text" value="" name="password" required='required' placeholder="yourburdens">
						</div>
					</div>
					
					<div class="uk-margin">
						<button class="uk-button uk-button-default" type="submit" name="sub" >Kirjaudu</button>
					</div>
					
					
				</form>
				<form class="feedbackForm" action="contact.php" method="post">
					<h2> Lähetä palautetta! </h2>
					<p class="fbFormP">Nimi: </p>
					<input class="fbFormI" size="45" type="text" name="cf_name">
					<p class="fbFormP">S-posti: </p>
					<input class="fbFormI" size="45" type="text" name="cf_email">
					<p class="fbFormP">Viestin aihe: </p>
					<input class="fbFormI" size="45" type="text" name="cf_subject">
					<p class="fbFormP">Viesti: </p>
					<textarea rows="6" cols="35" name="cf_message"></textarea><br>
					<input type="submit" value="Lähetä">
					<input type="reset" value="Tyhjennä kentät">
					<br />
					<h3>Tarkistathan tietosi ennen kuin painat "Lähetä" -nappia, kiitos!</h3>
				</form>
			</div>
		</div>
		<?php require_once "inc/footer.php"; ?>
	
		<div class="navLinks" id="PHPSivunLinkit">
			<a id="PHPSivuLinkki" href="http://users.jyu.fi/~laeejoha/index.php">Etusivulle</a> <br>
		</div>
	
    </body>
	
</html>