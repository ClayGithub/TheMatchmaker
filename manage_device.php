<div id="manage_device">

<div>
	<h1 id="head17">Manage Device</h1>
<?php
 
include_once('header.php');
require_once 'config.php';
	
$db_server = mysqli_connect($db_host, $db_user, $db_password);

if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error($db_server));

if (isset($_POST['delete']) && isset($_POST['device_id']))
	{
		$device_id = $_POST['device_id'];
		
		$query = "DELETE FROM device WHERE device_id='$device_id'";
		
		if (!mysqli_query($db_server, $query))
		{
			echo "DELETE failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";

		} else{

			echo "You have deleted device: <strong>" .$_POST['device_name']. "</strong>";
		}
	}
?>

<div id="innertable">
<ul type="square">
<?php 
	$query = "SELECT * FROM device";
	
	$result = mysqli_query($db_server, $query);
	
	if (!$result) die ("Database access failed: " . mysqli_error($db_server));
	
	$rows = mysqli_num_rows($result);
	
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$row = mysqli_fetch_row($result);
?>
	<li>
		ID:   <?php echo $row[0]; ?><br>
		Name:    <?php echo $row[1]; ?><br>
		Manufacturer: <?php echo $row[3]; ?><br>
		Compatibility:     <?php echo $row[5]; ?><br>
		Price  $     <?php echo $row[6]; ?><br>
		Description: <?php echo $row[7]; ?><br><br>
	</li>				
	<form action="manage_device.php" method="post">
		<input type="hidden" name="device_name" value="<?php echo $row[1]; ?>">
		<input type="hidden" name="delete" value="yes" />
		<input type="hidden" name="device_id" value="<?php echo $row[0]; ?>" />
		<input type="submit" value="Delete Device" /><br>
	</form>
	<hr id="line">
<?php 
	}  //endforeach; 
	mysqli_free_result($result);
?>
	</ul>
</div>
	<p><a href="admin.php">Return to Administration Page</a></p>
</div>