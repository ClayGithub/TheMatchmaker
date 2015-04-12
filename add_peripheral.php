<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>

	<title>add peripheral device</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="admin_new.css">

	<?php include_once('header.php'); ?>

</head>
<body class="body">
	
	<?php 

	require_once 'config.php';
	$db_server = mysqli_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error($db_server));


	if(isset($_POST['devicename']) && isset($_POST['manufacturer']) &&  isset($_POST['compatibility']) && isset($_POST['price']) && isset($_POST['device_id']))
	{
		$name = $_POST['devicename'];
		$manufacturer = $_POST['manufacturer'];
		$compatibility = $_POST['compatibility'];
		$price = $_POST['price'];
		$device_id = $_POST['device_id'];

		$query = "INSERT INTO peripheral_device VALUES" . "('". mysqli_insert_id($db_server)."','$compatibility', '$name', '$manufacturer', '$price', '$device_id')";
		
		if (!mysqli_query($db_server, $query)){
		
			echo "INSERT failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";

		}else{

			header("Location: submit1.php");
		}

	}else{

		echo "Fill in the blank form first and then submit again.";
	}
?>
	<br>
	<h2 id="head1">Add Peripheral Device</h2>

	<table style="width:70%" id="ptable">
	<tr>
	<td>
	<form action="add_peripheral.php" method="post">
		<table align="center">
		<tr>
		<td  class="first">
			<label for="devicename">Device Name:</label>
		</td>
		<td class="second">
			<input type="text" name="devicename" size="15" maxlength="70" />
		</td>
		</tr>
		<tr>
		<td class="first">
			<label for="manufacturer">Manufacturer:</label>
		</td>
		<td class="second">
			<input type="text" name="manufacturer" size="15" maxlength="70" />
		</td>
		<tr>
		<td class="first">
			<label for="price">Price:</label>
		</td>
		<td class="second">
			$<input type="text" name="price" size="14" maxlength="10" />
		</td>
		</tr>
		<br/>
	<tr>
		<td class="first">
			<label for="device_id">Device ID:</label>
		</td>
		<td class="second">
			<input type="text" name="device_id" size="14" maxlength="10" />
		</td>
		</tr>
		<tr>
			<td class="first">
				<label for="Compatibility">Compatibility:</label>
			</td>
			<td class="second" >
				<label for="compatibility">Yes</label>
					<input type="radio" name="compatibility" value="1" checked="checked">
					 <label for="compatibility">No</label>
					<input type="radio" name="compatibility" value="0">
			</td>
		</tr>		
		<tr>
			<td>
			</td>
			<td class="third">
				<input type="reset" name="reset" value="Reset" />
				<input type="submit" name="submit" value="Add A Peripheral" /><br><br><br>
			</td>
		</tr>
		</table>
	</form>
	</td>
	</tr>
	</table>
	
	<?php
		include_once('footer.php');
	?>
</body>
</html>