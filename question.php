<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"UTF-8" />



<style>
table, th, td {
     border: 1px solid black;
}
body,td,th {
	font-family: Times New Roman, Times, serif;
	font-size: 12px;
	color: #000000;
}
body {
	margin-left: 250px;
	margin-right: 250px;
	margin-bottom: 50px;
	margin-top: 0px;
}
.STYLE5 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18;
}
.STYLE6 {font-size: 36px}
.STYLE7 {
	color: #000000;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.STYLE8 {
	color: #FF3300;
	font-size: 18px;
}
.STYLE9 {font-size: 12px}
.STYLE11 {font-size: 18px; color: #FF6600; }
</style>
</head>
<body>
<div align="center"><img src="../images/title.jpg" width="653" height="290" vspace="30" border="0" align="center" /></div><br />
    <a href="../index.html" class="STYLE7">
    <span class="STYLE8">Back To the Frontpage</span></a>
  

<form action='file:///E|/2014fall/senior design 1/the Matchmaker/index.php' method='post' class="STYLE5" align="center">
<p align="center" class="STYLE6">
What would you like to do?<br><br>
	<select name="question1">
	<option value="">Please Choose an Answer...</option>
	<option value="ans1">Entertainment</option>
	<option value="ans2">Use Assisted Technology</option>
	<option value="ans3">Communicate</option>
	<option value="ans4">All of the Above</option>
	</select>
  </p>
<span class="STYLE6"><br>
</span>
<p align="center" class="STYLE6">
What Kind of Device would you like?<br><br>
	<select name="question2">
	<option value="">Please Choose an Answer...</option>
	<option value="type1">Mobile Device: Android</option>
	<option value="type2">Mobile Device: Apple</option>
	<option value="type3">Medical Devices</option>
	<option value="type4">No Preference</option>
	</select>
	</p>
<span class="STYLE6"><br>
  </span>
<p align="center" class="STYLE6">
Do you have trouble Hearing?<br><br>

	<select name="question3">
	<option value="">Please Choose...</option>	
	<option value="hearYes">Yes</option>
	<option value="hearNo">No</option>
	</select>
	</p>
<span class="STYLE6"><br>
  </span>
<p align="center" class="STYLE6">
Do you have trouble Seeing?<br><br>

	<select name="question4">
	<option value="">Please Choose...</option>
	<option value="seeYes">Yes</option>
	<option value="seeNo">No</option>
	</select>
	</p>
<p><br>
  <a href="JavaScript:document.theForm.submit()"><img src="../images/button_submit.jpg" width="399" height="122" border="0" align="middle" /></a></p>
</form>	
<p><br />
  <br />
</p>
<br />
<br />
<hr align="center" width="700" size="2" />
<p><br />
</p>
<p align="center" class="STYLE9">copyright&copy; XXXXXXXXXXXXXXX</p>
<p align="center"><span class="STYLE11"><a href="#">contact us</a></span></p>
<p>
  <?php
session_start();


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
</p>
</body>
</html>