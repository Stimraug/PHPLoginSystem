<?php 
	// Allowing the config
	define('__CONFIG__', true);
	// Requiring the config
	require_once "inc/config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Page Title</title>
	
		<base href="/" />
		
    <!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />
	</head>
	
    <body>
	
	<!-- Below code copied from https://getuikit.com/docs/form#layout and modified-->
		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
					<form class="uk-form-stacked js-register">
					<h2>Register</h2>
					<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text">Username</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="username-stacked-text" type="username" required='required' placeholder="Dragonborn@whiterun.com">
						</div>
					</div>
					
					<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text">Password</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="password-stacked-text" type="password" required='required' placeholder="yourburdens">
						</div>
					</div>
					
					<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text">Re-type password</label>
						<div class="uk-form-controls">
							<input class="uk-input" id="retype_password-stacked-text" type="retype_password" required='required' placeholder="yourburdens">
						</div>
					</div>
					
					<div class="uk-margin">
						<button class="uk-button uk-button-default" type="submit">Register</button>
					</div>

				</form>
			</div>
		</div>
	
		<?php require_once "inc/footer.php"; ?>
	
		<div class="navLinks" id="PHPSivunLinkit">
		<a href="http://users.jyu.fi/~laeejoha/index.php">Etusivulle</a> <br>
		</div>
	
    </body>
	
</html>