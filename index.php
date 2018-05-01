<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta settings -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css" >
		<title>Lassin kotisivut</title>
		<!-- Automatic Slideshow - this changes the image shown every 4 seconds -->
		<!-- This code was "translated" from javascript to PHP by the website author-->
		<?php
		// Does not work?!
		/*
			$myIndex = 0;
			
		function carousel() {
			$x = document.getElementsByClassName("frontPageSlides");

			for ($i = 0; $i < $x.length; $i++){
				//$x[$i].style.display = "none";
			}

			$myIndex++;
			if ($myIndex > $x.length) {$myIndex = 1;}
			//$x[$myIndex - 1].style.display = "block";
			setTimeout(carousel, 4000); 

		}

			carousel();
		*/
		?>
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

		<!-- Automatic Slideshow - this changes the image shown every 4 seconds -->

		<!--
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}
			x[myIndex-1].style.display = "block";
			setTimeout(carousel, 4000);
		}
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