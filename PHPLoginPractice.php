<?php
	// Allowing the config
	define('__CONFIG__', true);
	// Requiring the config
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
					<h2>Login to Haybale <img alt="Haybale" align="middle" id="haybaleLogo" src="Pictures/hay_bale.png" style="width:172px;height:108px"></h2>
					<div class="uk-margin">
						<label class="uk-form-label" for="username-stacked-text">Username (="hii")</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="username-stacked-text" type="text" required='required' 
							placeholder="Dragonborn" value="<?= $_POST["username"] ?>" name="username" />
						</div>
					</div>
					
					<div class="uk-margin">
						<label class="uk-form-label" for="password-stacked-text">Password (="hoo")</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="password-stacked-text" type="text" value="" name="password" required='required' placeholder="yourburdens">
						</div>
					</div>
					
					<div class="uk-margin">
						<button class="uk-button uk-button-default" type="submit" name="sub" >Login</button>
						<button class="uk-button uk-button-default" type="submit">Register</button>
					</div>
					
				</form>
			</div>
		</div>
		<?php require_once "inc/footer.php"; ?>
	
		<div class="navLinks" id="PHPSivunLinkit">
			<a id="PHPSivuLinkki" href="http://users.jyu.fi/~laeejoha/index.php">Etusivulle</a> <br>
		</div>
	
    </body>
	
</html>