<?php
$servername = "localhost";
$USER = "root";
$key = "";
$dbname = "admin";
session_start();
// Create connection
$conn = new mysqli($servername, $USER, $key, $dbname);
$user1 = $_POST["admin"];
$pass = $_POST["password"];

$sql = "SELECT username,password FROM myAdmin WHERE `username`='".$user1."' and  `password`='".$pass."'";
$result = $conn->query($sql);
$_SESSION['usr'] = $user1;
if ($result->num_rows > 0) {
    echo "<script>window.location='admin1.php';</script>";
}
else
	{
		$message="Incorrect username/password found!";
	
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='index.php';</script>";
		echo"<script>close()</script>";
	}

$conn->close();
?>

