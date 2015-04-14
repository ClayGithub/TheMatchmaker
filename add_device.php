<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	
<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>add device</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="admin_new.css"> 
	<?php include_once("admin_fns.php"); ?>
	<?php include_once('header.php'); ?>
			
</head>
<body class="body">
	<div id="table">	
		<br>
		<h2 id="head1">Add A New Device</h2><br>
	<?php 

	require_once 'config.php';
	$db_server = mysqli_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error());


	if(isset($_POST['devicename']) && isset($_POST['disability_id']) && isset($_POST['manufacturer']) && isset($_POST['seller_id']) && isset($_POST['compatibility']) && isset($_POST['price']) && isset($_POST['text']) && isset($_POST['peri_device_id']))
	{
		$name = $_POST['devicename'];
		$disability_id = $_POST['disability_id'];
		$manufacturer = $_POST['manufacturer'];
		$seller_id = $_POST['seller_id'];
		$compatibility = $_POST['compatibility'];
		$price = $_POST['price'];
		$description = $_POST['text'];
		$peri_device_id = $_POST['peri_device_id'];

		$query = "INSERT INTO device VALUES" . "('". mysqli_insert_id($db_server)."', '$name', '$disability_id', '$manufacturer', '$seller_id', '$compatibility', '$price', '$description', '$peri_device_id')";
		
		if (!mysqli_query($db_server, $query)){
		
			echo "INSERT failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";
		}else{

			header("Location: submit.php");
		}

	}else{

		echo "Fill in the blank form first and then submit again.";
	}
?>

	<table style="width:70%" id="ptable">
		<tr>
		<td>
		<form action="add_device.php" method="post">
			<table align="center">
			<tr>
			<td  class="first">
				<label for="devicename">Device Name:</label>
			</td>
			<td class="second">
				<input type="text" name="devicename" maxlength="70" />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="disability_id">Disability ID:</label>
			</td>
			<td class="second">
				<input type="text" name="disability_id" size="5" />
			</td>
			</tr>
			<tr>
			<td class="first">
				<label for="manufacturer">Manufacturer:</label>
			</td>
			<td class="second">
				<input type="text" name="manufacturer" size="15" maxlength="70" />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="devicename">Seller ID:</label>
			</td>
			<td class="second">
				<input type="text" name="seller_id" value="" size="5" />
			</td>
			</tr>
			<tr>
			<td class="first">
				<label for="price">Price:</label>
			</td>
			<td class="second">
				$<input type="text" name="price" value="" maxlength="10" />
			</td>
			</tr>
			<br/>
			<tr>
				<td class="first">
					<label for="Compatibility">Compatibility:</label>
				</td>
				<td class="second" >
					<label for="compatibility">Yes</label>
						<input type="radio" name="compatibility" value="1"  />
						 <label for="compatibility">No</label>
						<input type="radio" name="compatibility" value="0" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="devicename">Peri Device ID:</label>
			</td>
			<td class="second">
				<input type="text" name="peri_device_id" size="5" />
			</td>
			</tr>
			
			<tr>
				<td class="first">
					<label for="text"> Device Description:</label>
				</td>
				<td class="second">
					<textarea name="text" rows="3" cols="50">
					</textarea>
				</td>
			</tr>
			<tr>
				<td>			
				</td>
				<td class="third">
					<input type="reset" name="reset" value="Reset" />
					<input type="submit" name="submit" value="Add A Device" />			
				</td>
			</tr>
			</table>
		</form>
		</td>
		</tr>
	</table>
	</div>
</body>
</html>