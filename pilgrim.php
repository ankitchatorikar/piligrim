<?php
  session_start();
  ?>
  <?php
    include "connection.php";
	
	$username=$_POST['username'];
	$password=$_POST['pwd'];
	$adhar=$_POST['uid'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$age = $_POST['age'];
	$email=$_POST['email'];
	$mno=$_POST['number'];
	$address=$_POST['address'];
	
	  $iu = "insert into pilgrim values
	       ('$username','$password','$adhar','$name','$gender','$age','$email','$mno','$address')";
		   
		       


          if ($conn->query($iu)=== FALSE) 
		  {
              $message = "Sorry! Username already taken";
		     echo "<script type='text/javascript'>alert('$message');</script>";
		     echo "<script>window.location='userinfo.php';</script>";
	      }
		  else
		  {
		  header("location: login.php?remarks=success");
          }
 ?>	      