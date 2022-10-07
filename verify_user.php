<?php 
$error = array();
if(isset($_POST['register'])){
	
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$password = md5($pass);

	require_once 'functions/database_functions.php';
		$conn = db_connect();

	$sql = mysqli_query($conn,"SELECT email from user where email = '$email'");
	if(mysqli_num_rows($sql) > 0){
		$error[] = 'user exist';
	}

	elseif(empty($fname) || empty($lname) || empty($email) || empty($pass)){
		$error[] = "all data must filled";
	}
	elseif(strlen($pass) < 8){
		$error[] = "password is too short. Password length must be eight character";
	}
	elseif(!isset($_POST['agree'])){
		$error[] = "Agree to our terms to continue";
	}
	else{
		

		$query = "INSERT into user(fname,lname,email,password) values('$fname','$lname','$email','$password')";
		$result = mysqli_query($conn,$query);
		if(!$result){
		$error[] = "registration failed" . mysqli_error($conn);
		}
		
	}

	mysqli_close($conn);
	
}

