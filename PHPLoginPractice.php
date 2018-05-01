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
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>PHP Login Practice</title>
	
		<base href="http://users.jyu.fi/~laeejoha/index.php" />
		
    <!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />
	</head>
	
    <body>
	<form action="" method="post">
	<!-- Below code copied from https://getuikit.com/docs/form#layout and modified-->
		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
							<form class="uk-form-stacked">
					<h2>Login</h2>
					<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text-username">Username</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="username" type="username" required='required' 
							placeholder="Dragonborn@whiterun.com" value="<?= $_POST["username"] ?>" name="username" />
						</div>
					</div>
					
					<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text">Password</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="password-stacked-text" type="password" value="" name="password" required='required' placeholder="yourburdens">
						</div>
					</div>
					
					<div class="uk-margin">
						<button class="uk-button uk-button-default" type="submit" name="sub" >Login</button>
						<button class="uk-button uk-button-default" type="register">Register</button>
					</div>
					
				</form>
			</div>
		</div>
	</form>
		<?php require_once "inc/footer.php"; ?>
	
		<div class="navLinks" id="PHPSivunLinkit">
		<a href="http://users.jyu.fi/~laeejoha/index.php">Etusivulle</a> <br>
		</div>
	
    </body>
	
</html>