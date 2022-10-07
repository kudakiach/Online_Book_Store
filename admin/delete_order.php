<?php
	$id = $_GET['Id'];

	require_once "../functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM orders WHERE orderid = '$id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: order.php");
?>