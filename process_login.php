<?php
session_start(); // Starting Session
$error=array(); // Variable To Store Error Message
if (isset($_POST['login'])) {

if (empty($_POST['email']) || empty($_POST['password'])) {

$error[] = "Email or Password has to be filled";

}
else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];
$pass = md5($password);

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require_once 'functions/database_functions.php';
$conn = db_connect();
// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
//$fname= stripslashes($fname);

 
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"SELECT email,password FROM user WHERE password='$pass' AND email='$email'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$email; // Initializing Session
header('location: index.php'); // Redirecting To Other Page
} else {
$error[] = "Email or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>