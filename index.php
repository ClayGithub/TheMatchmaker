<?php
ob_start();
session_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"UTF-8" />



<style>
table, th, td {
     padding:4px;
	 align: center;
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
	font-size: 20;
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
.STYLE12{background-image:url(images/button_submit.jpg);width:399px ;height:122px}
a:link {
	text-decoration: none;
}
</style>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
</head>
<body onload="MM_preloadImages('images/matchmaker1.jpg','images/results1.jpg','images/about1.jpg','images/help1.jpg')">
<div align="center">
<img src="images/DDRC_logo.jpg" alt="logo" />
  <h2 style = 'text-align:center; font-size:50px;'>Matching Technology To People</h2>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div align="center">
<table border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td><a href="index.php" target="_top" onclick="MM_nbGroup('down','group1','Matchmaker','',1)" onmouseover="MM_nbGroup('over','Matchmaker','images/matchmaker1.jpg','',1)" onmouseout="MM_nbGroup('out')"><img src="images/matchmaker0.jpg" alt="" name="Matchmaker" width="296" height="60" border="0" id="Matchmaker" onload="" /></a></td>
    <td><a href="results.php" target="_top" onclick="MM_nbGroup('down','group1','Results','',1)" onmouseover="MM_nbGroup('over','Results','images/results1.jpg','',1)" onmouseout="MM_nbGroup('out')"><img src="images/results0.jpg" alt="" name="Results" width="156" height="60" border="0" id="Results" onload="" /></a></td>
    <td><a href="about.php" target="_top" onclick="MM_nbGroup('down','group1','About','',1)" onmouseover="MM_nbGroup('over','About','images/about1.jpg','',1)" onmouseout="MM_nbGroup('out')"><img src="images/about0.jpg" alt="" name="About" width="156" height="60" border="0" id="About" onload="" /></a></td>
    <td><a href="help.php" target="_top" onclick="MM_nbGroup('down','group1','Help','',1)" onmouseover="MM_nbGroup('over','Help','images/help1.jpg','',1)" onmouseout="MM_nbGroup('out')"><img src="images/help0.jpg" alt="" name="Help" width="156" height="60" border="0" id="Help" onload="" /></a></td>
  </tr>
</table>
<p>&nbsp;</p>
</div>
<p><br />
  <a href="index.html" class="STYLE7"></a></p>
  <div align="center">
<form action='index.php' method='post' class="STYLE5" align="center">
<p align="center" class="STYLE6">
What would you like to do?<br><br>
	<select name="question1">
	<option value="">Please Choose an Answer...</option>
	<option value="ans1">Entertainment</option>
	<option value="ans2">Communicate</option>
	<option value="ans3">Scheduling</option>
	<option value="ans4">Everyday Tasks</option>
	<option value="ans5">All of the Above</option>
	
	</select>
  </p><br>

<p align="center" class="STYLE6">
What Kind of Device would you like?<br><br>
	<select name="question2">
	<option value="">Please Choose an Answer...</option>
	<option value="type1">Mobile Device: Android</option>
	<option value="type2">Mobile Device: Apple</option>
	<option value="type3">Specialized Devices</option>
	<option value="type4">No Preference</option>
	
	
	</select>
  </p><br>




  <input type='submit' value='' class="STYLE12" name='go' /> 


</form>	
</div>
<p><br />
  <br />
</p>
<br />
<br />
<hr align="center" width="700" size="2" />
<p><br />
</p><div id="stcpDiv">
<p align="center" class="STYLE9">copyright&copy; 2014 Developmental Disabilities Resource Center</p>
<p align="center"><span class="STYLE11"><a href="http://http://www.ddrcco.com/">contact us</a></span></p></div>
<p>
<?php

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
	
	
	
}
else{
}
?>
</p>
</body>
</html>