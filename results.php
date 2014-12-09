<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

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
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"><style type="text/css">
<!--
body,td,th {
	color: #000000;
	font-family: Times New Roman, Times, serif;
}
body {
	margin-left: 250px;
	margin-right: 250px;
	margin-bottom: 50px;
	margin-top: 0px;
}
-->
</style>


<style>

.STYLE1 {font-family: "Times New Roman", Times, serif}
.STYLE2 {
	font-size: 12px;
	font-family: "Times New Roman", Times, serif;
}
.STYLE3 {
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
}
.STYLE4{

background-color:#FFFFFF;
 border:0;
  padding:0px;
   cellspacing:0px;
   height:60px;
  
  align:center;
   
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
table, th, td {
     border:0;
	 
	 font-size: 20px;
	 background-color:#CEECF2;
	 width:800px;
	 text-align:center;
	 cellspacing:20px;
	 padding:20px;
	 
}
</style>
</head>
<body onLoad="MM_preloadImages('../images/matchmaker1.jpg','../images/results1.jpg','../images/about1.jpg','../images/help1.jpg')">

<div align="center">
<img src="images/DDRC_logo.jpg" alt="logo" />
<h2 class="STYLE1" style = 'text-align:center; font-size:50px;'>Matching Technology To People<br>
  <br>
</h2>

<table  class="STYLE4" width="764" >
  <tr>
    <td class="STYLE4" width="296px" ><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Matchmaker','',1)" onMouseOver="MM_nbGroup('over','Matchmaker','images/matchmaker1.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/matchmaker0.jpg" alt="" name="Matchmaker" width="296" height="60" border="0" onload=""></a></td>
    <td class="STYLE4" width="156px" ><a href="results.php" target="_top" onClick="MM_nbGroup('down','group1','Results','',1)" onMouseOver="MM_nbGroup('over','Results','images/results1.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/results0.jpg" alt="" name="Results" width="156" height="60" border="0" onload=""></a></td>
    <td class="STYLE4" width="156px" ><a href="about.php" target="_top" onClick="MM_nbGroup('down','group1','About','',1)" onMouseOver="MM_nbGroup('over','About','images/about1.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/about0.jpg" alt="" name="About" width="156" height="60" border="0" onload=""></a></td>
    <td class="STYLE4" width="156px" ><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','Help','',1)" onMouseOver="MM_nbGroup('over','Help','images/help1.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/help0.jpg" alt="" name="Help" width="156" height="60" border="0" onload=""></a></td>
  </tr>
</table>
<p>&nbsp;</p>

<p>&nbsp;</p>
</div>
<?php





/*
index.php
Andrew Clay <andrew.c.clay@ucdenver.edu>
File to view products


*/


error_reporting(E_ALL ^ E_NOTICE);
// Create connection
$conn= mysqli_connect("","root","930517jzg","matchmaker");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



function individualProduct($idNumber) {
    
}

$question1A = $_SESSION['question1'];
$question2A = $_SESSION['question2'];

if(isset($_GET['compatID'])) {
	
	$compatID = $_GET['compatID'];
	//echo $compatID;
	
	if($question1A == "ans1")
	{
		$sql = "SELECT * FROM peripheral_device WHERE entertainment = 1 AND compatibility = " . $compatID;
			
				
		$result = $conn-> query($sql);
	}
	else if($question1A == "ans2")
	{
		$sql = "SELECT * FROM peripheral_device WHERE communication = 1 AND compatibility = " . $compatID;
			
				
		$result = $conn-> query($sql);
	}
	else if($question1A == "ans3")
	{
		$sql = "SELECT * FROM peripheral_device WHERE scheduling = 1 AND compatibility = " . $compatID;
			
				
		$result = $conn-> query($sql);
	}
	else if($question1A == "ans4")
	{
		$sql = "SELECT * FROM peripheral_device WHERE everyday_tasks = 1 AND compatibility = " . $compatID;
			
				
		$result = $conn-> query($sql);
	}
	else if($question1A == "ans5")
	{
		$sql = "SELECT * FROM peripheral_device WHERE entertainment = 1 AND communication = 1 AND scheduling = 1 AND everyday_tasks = 1 AND compatibility = " . $compatID;
			
				
		$result = $conn-> query($sql);
	}
	
			if ($result->num_rows > 0) {
					echo "<table align='center';><tr><th>Device Name</th><th>Description</th><th>Website</th></tr>";
			// output data of each row
					while($row = $result ->fetch_assoc()) {
					
						
						
						
						
						echo "<tr><td 'width=50px;'>". $row["peri_device_name"]. "</td><td>".$row["description"]."</td><td>".$row["website"]."</td></tr>";
						
					}
					echo "</table>";
					
					
					
					
				} 
				else {
				echo "<p align='center';>
					 We're Sorry, We Couldn't Find Any Attachments For This Device That Met Your Needs!
					 
				     </p></ br>";
				echo "<p align='center';>
					Please Go Back And Try Another Device
				</p>";
				}
				
			
				
				
			$conn->close();

}
else if(isset($_GET['view_id'])) {

	
	
		$product_id = $_GET['view_id'];
		//echo $product_id;
		
		
		$sql = "SELECT * FROM device WHERE device_id = " . $product_id;
			
				
		$result = $conn-> query($sql);
		
		
		
		if ($result->num_rows > 0) {
				echo "<table align='center';><tr><th>Device Name</th><th>Description</th><th>Manufacturer</th></tr>";
		// output data of each row
				while($row = $result ->fetch_assoc()) {
				
					$compatID = $row["compatibility"];
					
					
					
					echo "<tr><td><a href='./results.php?compatID=$compatID'>". $row["device_name"]. "</a></td><td>".$row["description"]."</td><td>".$row["manufacturer"]."</td></tr>";
					
				}
				echo "</table>";
				
				
				
				
			} 
			else {
				echo "0 results";
			}
			
		
			
			
		$conn->close();

	
	
	
}
else{

/*
	if($question1A == "ans1")
	{
		echo "<p>
		$question1A
		</p></ br>";
	}
	else if($question1A == "ans2")
	{
		echo "<p>
		$question1A
		</p></ br>";
	}
	else if($question1A == "ans3")
	{
		echo "<p>
		$question1A
		</p></ br>";
	}
	else if($question1A == "ans4")
	{
		echo "<p>
		$question1A
		</p></ br>";
	}
	else if($question1A == "ans5")
	{
		echo "<p>
		$question1A
		</p></ br>";
	}

	if($question2A == "type1")
	{
		echo "<p>
		$question2A
		</p></ br>";
	}
	else if($question2A == "type2")
	{
		echo "<p>
		$question2A
		</p></ br>";
	}
	else if($question2A == "type3")
	{
		echo "<p>
		$question2A
		</p></ br>";
	}
	else if($question2A == "type4")
	{
		echo "<p>
		$question2A
		</p></ br>";
	}

*/

	if($question1A == "ans1")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device WHERE entertainment = 1 AND android = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device WHERE entertainment = 1 AND apple = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device WHERE entertainment = 1 AND specialized = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device WHERE entertainment = 1";
			
				
			$result = $conn-> query($sql);
			
		}
			
			if ($result->num_rows > 0) {
				echo "<table align='center';><tr><th>Device Name</th><th>Description</th><th>Manufacturer</th></tr>";
		// output data of each row
				while($row = $result ->fetch_assoc()) {
					$id = $row["device_id"];
					
					
					
					
					echo "<tr><td><a href='./results.php?view_id=$id'>". $row["device_name"]. "</a></td><td>".$row["description"]."</td><td>".$row["manufacturer"]."</td></tr>";
				}
				echo "</table>";
			} 
			else {
				echo "0 results";
			}
		
		
		
			$conn->close();
		
		
	}
	else if($question1A == "ans2")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device WHERE communication = 1 AND android = 1";
			
				
			$result = $conn-> query($sql);
		}	
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device WHERE communication = 1 AND apple = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device WHERE communication = 1 AND specialized = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device WHERE communication = 1";
			
				
			$result = $conn-> query($sql);
			
		}	
			if ($result->num_rows > 0) {
				echo "<table align='center';><tr><th>Device Name</th><th>Description</th><th>Manufacturer</th></tr>";
		// output data of each row
				while($row = $result ->fetch_assoc()) {
					$id = $row["device_id"];
					
					
					
					
					echo "<tr><td><a href='./results.php?view_id=$id'>". $row["device_name"]. "</a></td><td>".$row["description"]."</td><td>".$row["manufacturer"]."</td></tr>";
				}
				echo "</table>";
			} 
			else {
				echo "0 results";
			}
		
		
		
			$conn->close();
		
	}
		
	else if($question1A == "ans3")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device WHERE scheduling = 1 AND android = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device WHERE scheduling = 1 AND apple = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device WHERE scheduling = 1 AND specialized = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device WHERE scheduling = 1";
			
				
			$result = $conn-> query($sql);
			
		}	
			
			if ($result->num_rows > 0) {
				echo "<table align='center';><tr><th>Device Name</th><th>Description</th><th>Manufacturer</th></tr>";
		// output data of each row
				while($row = $result ->fetch_assoc()) {
					$id = $row["device_id"];
					
					
					
					
					echo "<tr><td><a href='./results.php?view_id=$id'>". $row["device_name"]. "</a></td><td>".$row["description"]."</td><td>".$row["manufacturer"]."</td></tr>";
				}
				echo "</table>";
			} 
			else {
				echo "0 results";
			}
		
		
		
			$conn->close();
		
		
	}
	else if($question1A == "ans4")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device WHERE everyday_tasks = 1 AND android = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device WHERE everyday_tasks = 1 AND apple = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device WHERE everyday_tasks = 1 AND specialized = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device WHERE everyday_tasks = 1";
			
				
			$result = $conn-> query($sql);
			
		}		
			
			if ($result->num_rows > 0) {
				echo "<table align='center';><tr><th>Device Name</th><th>Description</th><th>Manufacturer</th></tr>";
		// output data of each row
				while($row = $result ->fetch_assoc()) {
					$id = $row["device_id"];
					
					
					
					
					echo "<tr><td><a href='./results.php?view_id=$id'>". $row["device_name"]. "</a></td><td>".$row["description"]."</td><td>".$row["manufacturer"]."</td></tr>";
				}
				echo "</table>";
			} 
			else {
				echo "0 results";
			}
		
		
		
			$conn->close();
		
		
	}
	else if($question1A == "ans5")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device WHERE entertainment = 1 AND communication = 1 AND everyday_tasks = 1 AND scheduling = 1 AND android = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device WHERE entertainment = 1 AND communication = 1 AND everyday_tasks = 1 AND scheduling = 1 AND apple = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device WHERE entertainment = 1 AND communication = 1 AND everyday_tasks = 1 AND scheduling = 1 AND specialized = 1";
			
				
			$result = $conn-> query($sql);
		}
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device WHERE entertainment = 1 AND communication = 1 AND everyday_tasks = 1 AND scheduling = 1";
			
				
			$result = $conn-> query($sql);
			
		}		
			
			if ($result->num_rows > 0) {
				echo "<table align='center';><tr><th>Device Name</th><th>Description</th><th>Manufacturer</th></tr>";
		// output data of each row
				while($row = $result ->fetch_assoc()) {
					$id = $row["device_id"];
					
					
					
					
					echo "<tr><td><a href='./results.php?view_id=$id'>". $row["device_name"]. "</a></td><td>".$row["description"]."</td><td>".$row["manufacturer"]."</td></tr>";
				}
				echo "</table>";
			} 
			else {
				echo "0 results";
			}
		
		
		
			$conn->close();
		

		
	}

}
?>
<br><br><br>
<hr align="center" width="700" size="2">
<p><br />
</p>

<div id="stcpDiv">
<p align="center" class="STYLE9 STYLE2">copyright&copy; 2014 Developmental Disabilities Resource Center</p>
<p align="center"><span class="STYLE11 STYLE3"><a href="http://http://www.ddrcco.com/">contact us</a></span></p>
</div>
</body>
</html>
