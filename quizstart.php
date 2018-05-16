<!--
Code adapted from https://www.lockedowndesign.com/build-a-quiz-in-php-tutorial/
-->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Test your PHP knowledge</title>
    <link rel="stylesheet" type="text/css" href="css/quizstyle.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="page-wrap">
        <form id="start-quiz" method="post" action="quizquestions.php">
            <div class="overlay index">
            <div class="quiz-overlay"></div>
	        <h1 class="index-headline">Test your PHP knowledge</h1>
		<p class="index-sell">This quiz will test your PHP know-how</p>
                <input type="submit" id="submit" class="take-quiz-btn index-btn" value="Test your might" />
            </div>                       
        </form>
    </div>	     
</body>
</html>