<?php
	$id = $_GET['userId'];

	require_once "../functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM user WHERE id = '$id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: user.php");
?>