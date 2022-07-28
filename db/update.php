<?php 
	
	$id =  $_POST['id_entry'];
	$title =  $_POST['name_entry'];
	$size = $_POST['phone_entry'];
	$price = $_POST['address_entry'];
	$configaration =  $_POST['con_entry'];
	$available = $_POST['avail_entry'];
		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update product_info SET Title='$title', Size='$size', Price='$price', configaration='$configaration', Available='$available' WHERE ID='$id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);
	$conn->close();
	
	if (!$result)
	{
		echo "Error during update!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully updated contact info of $name. <br>";
		header("Location: ../index.php"); 
	}

	

	echo "<a href='../index.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>