<?php
	// ob_start();
	session_start();

	include "connection.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="select * from `pilgrim` where  `username`='".$username."' and  `password`='".$password."'";
	$res=$conn->query($q);
	if(mysqli_num_rows($res)>0)
	{
		 $_SESSION['usr'] = $username;
	  
		echo "<script>window.location='uacc.php';</script>";
	}
	else
	{
		$message="Incorrect username/password found!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='login.php';</script>";
		echo"<script>close()</script>";
	}
$_SESSION['username']=$username;
?>
