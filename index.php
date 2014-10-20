<?php
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

$products[1] = array(
	'name' => 'Item#1',
	'price' => 24.99,
	'category' => 'Category#1',
	'description' => 'MONKEY TIME'
);

$products[2] = array(
	'name' => 'Item#2',
	'price' => 50.00,
	'category' => 'Category#2',
	'description' => 'SO MUCH WATER'
);

$products[3] = array(
	'name' => 'Item#3',
	'price' => 60000.50,
	'category' => 'Category#3',
	'description' => 'Best way to mess with you\'re monkeys and this sentence is very nonsinceical and there are a ton of misspellings and other problems and this guy is still typing so I guess that I need to keep typing'
);

$products[4] = array(
	'name' => 'Item#4',
	'price' => 24.99,
	'category' => 'Category#4',
	'description' => 'MONKEY TIME'
);

$products[5] = array(
	'name' => 'Item#5',
	'price' => 50.00,
	'category' => 'Category#5',
	'description' => 'SO MUCH WATER'
);

$products[6] = array(
	'name' => 'Item#6',
	'price' => 60000.50,
	'category' => 'Category#6',
	'description' => 'Best way to mess with you\'re monkeys and this sentence is very nonsinceical and there are a ton of misspellings and other problems and this guy is still typing so I guess that I need to keep typing'
);





echo "<h2 style = 'text-align:center; font-size:50px;'>Matchmaker Project Coming Soon!</h2>";


if(isset($_GET['view_product'])) {
	$product_id = $_GET['view_product'];
	//View Individual product
	echo "View Product: $product_id<br />";
	
	echo "<p>
		<span style='font-weight:bold;'>" . $products[$product_id]['name'] . "</span><br />
		<span>$" . $products[$product_id]['price'] . "</span><br />
		<span>" . $products[$product_id]['category'] . "</span><br />
		<span>" . $products[$product_id]['description'] . "</span>
	
	</p>";
	
	
	
}
else{
	echo "<h3>Products</h3>";


	echo "<table style='width:500px;' cellspacing='0'>";
	echo "<tr style='border-bottom:1px solid #000000;'>
		<th style='border-bottom:1px solid #000000;'>Name</th>
		<th style='border-bottom:1px solid #000000;'>Price</th>
		<th style='border-bottom:1px solid #000000;'>Category</th>
	</tr>";

	//Loop for displaying products

	foreach($products as $id => $product) {
		echo "<tr>
			<td style='border-bottom:1px solid #000000;'><a href='./index.php?view_product=$id'>" . $product['name'] . "</a></td>
			<td style='border-bottom:1px solid #000000;'>$" . $product['price'] . "</td>
			<td style='border-bottom:1px solid #000000;'>" . $product['category'] . "</td>
		</tr>";

		
	}
	echo "</table>";
		
}	





?>