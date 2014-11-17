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


<?php

session_start();



/*
index.php
Andrew Clay <andrew.c.clay@ucdenver.edu>
File to view products


*/


error_reporting(E_ALL ^ E_NOTICE);
// Create connection
$con=mysqli_connect("","root","password","mydb");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//Product information
//Will Be replaced with database information
/*
$products = array(
	1 => array(
	'name' => 'Item#1',
	'price' => 24.99,
	'category' => 'Category#1',
	'description' => 'Description 1'
	),
	2 => array(
	'name' => 'Item#2',
	'price' => 50.00,
	'category' => 'Category#2',
	'description' => 'Description 2'
	),
	3 => array(
	'name' => 'Item#3',
	'price' => 60000.50,
	'category' => 'Category#3',
	'description' => 'Description 3'
	),
	4 => array(
	'name' => 'Item#4',
	'price' => 24.99,
	'category' => 'Category#4',
	'description' => 'Description 4'
	),
	5 => array(
	'name' => 'Item#5',
	'price' => 50.00,
	'category' => 'Category#5',
	'description' => 'Description 5'
	),
	6 => array(
	'name' => 'Item#6',
	'price' => 60000.50,
	'category' => 'Category#6',
	'description' => 'Description 6'
	)
	
	
);






if(isset($_GET['view_product'])) {
	$product_id = $_GET['view_product'];
	//View Individual product
	
	//Displays site links
/*	echo "<p>
	<a href='./index.php'>Matchmaker</a> &gt; <a href='./index.php'>" . 
	$products[$product_id]['name'] . "</a></p>";
	
	
	//Display products
	echo "<p>
		<span style='font-weight:bold;'>" . $products[$product_id]['name'] . "</span><br />
		<span>$" . $products[$product_id]['price'] . "</span><br />
		<span>" . $products[$product_id]['category'] . "</span><br />
		<span>" . $products[$product_id]['description'] . "</span>
	
	</p>";
	
	
	
}
else{
	
//
//	echo "<p>
//	<a href='./index.php'>Matchmaker</a></p>";
	
	
	
	
	
	echo "<h3 style = 'text-align:center;'>Products</h3>";
	
	echo "<table align='center' style='width:500px; text-align:center; cellspacing='0'>";
	
	echo "<tr style='border-bottom:1px solid #000000; text-align:center;'>
		<th style='border-bottom:1px solid #000000;'>Name</th>
		<th style='border-bottom:1px solid #000000;'>Price</th>
		<th style='border-bottom:1px solid #000000;'>Category</th>
	</tr>";

	//Loop for displaying products

	foreach($products as $id => $product) {
		echo "<tr style = 'text-align:center;' >
			<td style='border-bottom:1px solid #000000; text-align:center;'><a href='./index.php?view_product=$id'>" . $product['name'] . "</a></td>
			<td style='border-bottom:1px solid #000000;'>$" . $product['price'] . "</td>
			<td style='border-bottom:1px solid #000000;'>" . $product['category'] . "</td>
		</tr>";

		
	}
	echo "</table>";
		
}	


*/

$question1A = $_SESSION['question1'];
$question2A = $_SESSION['question2'];
$question3A = $_SESSION['question3'];
$question4A = $_SESSION['question4'];

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

if($question3A == "hearYes")
{
	echo "<p>
	$question3A
	</p></ br>";
}
else if($question3A == "hearNo")
{
	echo "<p>
	$question3A
	</p></ br>";
}

if($question4A == "seeYes")
{
	echo "<p>
	$question4A
	</p></ br>";
}
else if($question4A == "seeNo")
{
	echo "<p>
	$question4A
	</p></ br>";
}



?>

</body>
</html>
