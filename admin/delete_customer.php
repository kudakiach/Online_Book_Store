<?php
	$id = $_GET['cusId'];

	require_once "../functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM customers WHERE customerid = '$id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: customers.php");
?>