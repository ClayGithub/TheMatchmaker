<!DOCTYPE html>
<html>
<head>

<h2 style = 'text-align:center; font-size:50px;'>Matching Technology To People</h2>

<p>
	<a href='./index.php'>Matchmaker</a></p>

<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>


<form action='index.php' method='post' align="center">
<p align="center">
What would you like to do?<br><br>
	<select name="question1">
	<option value="">Please Choose an Answer...</option>
	<option value="ans1">Entertainment</option>
	<option value="ans2">Use Assisted Technology</option>
	<option value="ans3">Communicate</option>
	<option value="ans4">All of the Above</option>
	
	</select>
	</p><br>

<p align="center">
What Kind of Device would you like?<br><br>
	<select name="question2">
	<option value="">Please Choose an Answer...</option>
	<option value="type1">Mobile Device: Android</option>
	<option value="type2">Mobile Device: Apple</option>
	<option value="type3">Medical Devices</option>
	<option value="type4">No Preference</option>
	
	
	</select>
	</p><br>
	
	<p align="center">
Do you have trouble Hearing?<br><br>

	<select name="question3">
	<option value="">Please Choose...</option>	
	<option value="hearYes">Yes</option>
	<option value="hearNo">No</option>
	</select>
	</p><br>
	
	<p align="center">
Do you have trouble Seeing?<br><br>

	<select name="question4">
	<option value="">Please Choose...</option>
	<option value="seeYes">Yes</option>
	<option value="seeNo">No</option>
	</select>
	</p><br>
	
<input type='submit' value='Submit' name='go' />
</form>	

<?php

session_start();



/*
index.php
Andrew Clay <andrew.c.clay@ucdenver.edu>
File to view products


*/

if(isset($_POST['go'])){

	if($_POST['question1'] != "")
	{
		$question1 = $_POST['question1'];
		$_SESSION['question1'] = $question1;
		header("Location: ./results.php");
	}
	else{
		header("Location: ./index.php");
	}


	if($_POST['question2'] != "")
	{
		$question2 = $_POST['question2'];
		$_SESSION['question2'] = $question2;
	}
	else{
		header("Location: ./index.php");
	}
	if($_POST['question3'] != "")
	{
		$question3 = $_POST['question3'];
		$_SESSION['question3'] = $question3;
	}
	else{
		header("Location: ./index.php");
	}
	if($_POST['question4'] != "")
	{
	$question4 = $_POST['question4'];
	$_SESSION['question4'] = $question4;
	}
	else{
		header("Location: ./index.php");
	}
	
	
}


else{



}










?>




</body>
</html>
