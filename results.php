<!DOCTYPE html>
<html>
<head>

<h2 style = 'text-align:center; font-size:50px;'>Matching Technology To People</h2>

<p>
	<a href='./index.php'>Matchmaker</a>
	--
	<a href='./results.php'>Results</a>
	--
	<a href='./about.php'>About</a>
	--
	<a href='./Help.php'>Help</a>
</p>

<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>


<?php

session_start();



/*
index.php
Andrew Clay <andrew.c.clay@ucdenver.edu>
File to view products


*/


error_reporting(E_ALL ^ E_NOTICE);
// Create connection
$conn= mysqli_connect("","root","password","matchmaker");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



function individualProduct($idNumber) {
    
}

$question1A = $_SESSION['question1'];
$question2A = $_SESSION['question2'];



if(isset($_GET['view_id'])) {
	$product_id = $_GET['view_id'];
	echo $product_id;
	
	$sql = "SELECT * FROM device WHERE device_id = " . $product_id;
		
			
	$result = $conn-> query($sql);
	
	if ($result->num_rows > 0) {
			echo "<table align='center';><tr><th>Device Name</th><th>Description</th><th>Manufacturer</th></tr>";
    // output data of each row
			while($row = $result ->fetch_assoc()) {
			
				
				
				
				
				echo "<tr><td>". $row["device_name"]. "</td><td>".$row["description"]."</td><td>".$row["manufacturer"]."</td></tr>";
			}
			echo "</table>";
		} 
		else {
			echo "0 results";
		}
		
		
		
	$conn->close();

	
}
else{


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



	if($question1A == "ans1")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
	else if($question1A == "ans2")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
	else if($question1A == "ans3")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
	else if($question1A == "ans4")
	{
		if($question2A == "type1")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type2")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type3")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
		else if($question2A == "type4")
		{
			$sql = "SELECT * FROM device";
			
				
			$result = $conn-> query($sql);
			
			
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
	

}
?>

</body>
</html>
