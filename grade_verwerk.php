require 'config.php'; <?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 
	
	
	
	if (isset($_POST['submit'])){
		
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	require 'config.php';

	$Studentnr = $_POST['Studentennummer'];
	$Naam = $_POST['Naam'];
	$Klas = $_POST['Klas'];
	$totalCorrect = $_POST['Score'];

	$query = "INSERT INTO BEROEPS1_P5_Quiz VALUES ('$Studentnr', '$Naam', '$Klas', '$Score')";

	if (mysqli_query($mysqli, $query)){
		
		echo $Studentnr;
		echo $Naam;
	}

	if (!mysqli_query($mysqli, $query)){

		echo "<p>Dankuwel" .$Naam . "De gegevens zijn in de database verwerkt!</p>";

	}else{
		echo "<p>Er is een fout opgetreden!</p>";
	}

	echo "<p><a href='user_form.html'>Terug</a></p>";
	}

	
 ?>
	
</body>
</html>