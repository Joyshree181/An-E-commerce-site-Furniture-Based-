<?php 
	
	$title =  $_POST['name_entry'];
	$size = $_POST['phone_entry'];
	$price = $_POST['address_entry'];
	$configaration =  $_POST['con_entry'];
	$available = $_POST['avail_entry'];
	
	
	require_once('../db_config.php');

	$sql = "Insert into product_info VALUES(NULL, '$title', '$size', '$price','$configaration', '$available')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);
	$conn->close();
	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added contact info. <br>";
		header("Location: ../index.php"); 
	}

	$conn->close();

	echo "<a href='../index.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>