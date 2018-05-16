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
    <title>PHP Knowledge quiz</title>
    <link rel="stylesheet" type="text/css" href="quizstyle.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="page-wrap">
        <h1 class="transparent index-headline">PHP knowledge quiz</h1>
	<form action="quizanswers.php" method="post" id="quiz">
            <ul id="test-questions">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>What values will the code below output? </h3>
					<code>
					$x = 3; <br>
					echo $x; <br>
					echo $x+++$x++; <br>
					echo $x; <br>
					echo $x---$x--; <br>
					echo $x; <br>
					<br>
					</code>
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">a.  "3, 9, 5, 1, 3"</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">b.  "3, 9, 3, 1, 3"</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">c.  "3, 7, 3, 1, 5"</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">d.  "3, 7, 5, 1, 3"</em></label>
                    </div>

                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>What is the output of the following code?</h3>
					<code> 
					$a = '4'; <br>
					$b = &$a; <br>
					$b = "2$b"; <br>
					echo $a.", ".$b; <br>
					<br>
					</code>
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">a.  "4, 8"</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">b.  "4, 4"</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">c.  "24, 24</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">d.  "4, 24</label>
                    </div>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>What will $x be equal to after the statement $x = 2 + "50%" + "$20"?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">a.  2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">b.  52</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">c.  3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">d.  72</label>
                    </div>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>After the code below is executed, what will be the value of $text and what will strlen($text) return?</h3>
					<code>
					$text = 'Hihii '; <br>
					$text[10] = 'Hohoo';
					<br>
					</code>
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">a.  "Hihii &nbsp&nbsp&nbsp&nbspH" </label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">b.  An out of bounds -error</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">c.  "Hihii"</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">d.  "Hihii &nbsp&nbsp&nbsp&nbspHohoo"</label>
                    </div>
                </li>
                <!--
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 5</h3>
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">d.  Answer 4</label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 6</h3>
                    <div class="mtm">
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 7</h3>
                    <div class="mtm">
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 8</h3>
                    <div class="mtm">
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 9</h3>
                    <div class="mtm">
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 10</h3>
                    <div class="mtm">
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 11</h3>
                    <div class="mtm">
                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                        <label for="question-11-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                        <label for="question-11-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                        <label for="question-11-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                        <label for="question-11-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 12</h3>
                    <div class="mtm">
                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                        <label for="question-12-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                        <label for="question-12-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                        <label for="question-12-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                        <label for="question-12-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 13</h3>
                    <div class="mtm">
                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                        <label for="question-13-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                        <label for="question-13-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                        <label for="question-13-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                        <label for="question-13-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 14</h3>
                    <div class="mtm">
                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                        <label for="question-14-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                        <label for="question-14-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                        <label for="question-14-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                        <label for="question-14-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				<li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 15</h3>
                    <div class="mtm">
                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                        <label for="question-15-answers-A" class="fwrd labela">a.  Answer 1</label>
                    </div>
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                        <label for="question-15-answers-B" class="fwrd labelb">b.  Answer 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                        <label for="question-15-answers-C" class="fwrd labelc">c.  Answer 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                        <label for="question-15-answers-D" class="fwrd labeld">d.  Answer 4</em></label>
                    </div>
                </li>
				-->
                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">The results will follow soon..</h3>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>
	</form>
        <div class="nomargin"></div>
    </div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
	<script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>
</body>
</html>
