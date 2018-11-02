<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<!--Session bouwen voor de score in de -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
<div id="page-wrap">	
<a href="index.html">Terug naar quiz</a>
<h1>PHP Quiz Resultaten</h1>	
<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];	
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
    $answer9 = $_POST['question-9-answers'];
    $answer10 = $_POST['question-10-answers'];
    $answer11 = $_POST['question-11-answers'];
    $answer12 = $_POST['question-12-answers'];
    $answer13 = $_POST['question-13-answers'];
    $answer14 = $_POST['question-14-answers'];
    $answer15 = $_POST['question-15-answers'];		

    $totalCorrect = 0;
    
    if ($answer1 == "A") { $totalCorrect++; }
    if ($answer2 == "C") { $totalCorrect++; }
    if ($answer3 == "B") { $totalCorrect++; }
    if ($answer4 == "A") { $totalCorrect++; }
    if ($answer5 == "C") { $totalCorrect++; }  
	if ($answer6 == "D") { $totalCorrect++; }
    if ($answer7 == "A") { $totalCorrect++; }
    if ($answer8 == "B") { $totalCorrect++; }
    if ($answer9 == "B") { $totalCorrect++; }
    if ($answer10 == "B") { $totalCorrect++; }		
    if ($answer11 == "A") { $totalCorrect++; }
    if ($answer12 == "C") { $totalCorrect++; }
    if ($answer13 == "B") { $totalCorrect++; }
    if ($answer14 == "A") { $totalCorrect++; }
    if ($answer15 == "C") { $totalCorrect++; } 
	
	if (session_start )
	{
		$totalCorrect;
	}
?>
<form method="POST" action="grade_verwerk.php">
	<table>
  <tr>
    <td>Naam:</td>
    <td><input type="text" id="Naam" name="Naam"></td>
  </tr>
  <tr>
    <td>Studentennummer:</td>
    <td><input type="text" id="Studentennummer" name="Studentennummer"></td>
  </tr>
  <tr>
    <td>Klas:</td>
    <td><input type="text" id="Klas" name="Klas"></td>
  </tr>
</table>
<br>
<input type="submit" name="submit" value="Verstuur gegevens">
</form>
</div>
<br>
<?php
echo "<div id='results'><strong>$totalCorrect / 15 correct</strong></div>";
?>
</body>

</html>