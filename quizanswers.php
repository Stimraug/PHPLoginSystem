<!-- Correct answers
1: D
2: C
3: B
4: A
5:
6:
7:
8:
9:
10:
11:
12:
13:
14:
15:
-->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PHP knowledge quiz results</title>
    <link rel="stylesheet" type="text/css" href="css/quizstyle.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="page-wrap">
        <h1 class="transparent index-headline" >Here are the results</h1>
        
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalCorrectAnswers = 0;
			$maxTotal = 4;
			$questionsToExplain = array();
			
            if ($answer1 == "D") { $totalCorrectAnswers++; }
			else (array_push($questionsToExplain, 1));

            if ($answer2 == "C") { $totalCorrectAnswers++; }
			else (array_push($questionsToExplain, 2));
			
            if ($answer3 == "B") { $totalCorrectAnswers++; }
			else (array_push($questionsToExplain, 3));
			
            if ($answer4 == "A") { $totalCorrectAnswers++; }
			else (array_push($questionsToExplain, 4));

			?>
			
		<div class="results-overlay">

            <?php
            
			if ($totalCorrectAnswers == $maxTotal) {
				 echo " Congratulations! ";
			 }
            echo $totalCorrectAnswers . " out of " . $maxTotal . " of your answers were correct. \n ";
			
			$questionsToExplainLength = count($questionsToExplain);
			$whileCount = 0;
			
			if ($questionsToExplainLength != 0) {
				if ($questionsToExplainLength == 1) {
					echo "Please revise your PHP knowledge regarding question ";
				}
				else {
					echo "Please revise your PHP knowledge regarding questions ";
				}
			}

			while ($whileCount != $questionsToExplainLength) {
				// Handling case of one wrong answer:
				if ($questionsToExplainLength - $whileCount == 1) {
					echo $questionsToExplain[$whileCount] . ".";
					$whileCount++;
				}
				
				// Handling case of two wrong answers:
				elseif ($questionsToExplainLength - $whileCount == 2) {
					echo $questionsToExplain[$whileCount] . " and " . $questionsToExplain[++$whileCount] . ".";			
					$whileCount++;
				}
				
				// Handling case of more than two wrong answers:
				elseif ($questionsToExplainLength - $whileCount >= 3) {
					echo $questionsToExplain[$whileCount] . ", ";
					$whileCount++;
				}
			}
			
            ?>     
        </div>
    </div>
