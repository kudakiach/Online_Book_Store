<?php
session_start(); // Starting Session
$error=array(); // Variable To Store Error Message
if (isset($_POST['login'])) {

if (empty($_POST['name']) || empty($_POST['pass'])) {

$error[] = "Username or Password has to be filled";

}
else
{
// Define $username and $password
$name=$_POST['name'];
$password=$_POST['pass'];
//$pass = md5($password);

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require_once '../functions/database_functions.php';
$conn = db_connect();
// To protect MySQL injection for Security purpose
$name = stripslashes($name);
$password = stripslashes($password);
//$fname= stripslashes($fname);

 
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"SELECT name,pass FROM admin WHERE pass='$password' AND name='$name'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['admin']=$name; // Initializing Session
header('location: dash.php'); // Redirecting To Other Page
} else {
$error[] = "Email or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>