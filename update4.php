<?php 
include "connection.php";
    $comp2 = $_POST['compl2'];
	
	$d = "delete from tariff where compl_NO='$comp2'";
	
	  if($conn->query($d)===TRUE)
		  {
				echo"<script>alert('Update Successful!!!')</script>";
					   echo "<script>window.location='update.php';</script>";
			}
			else
			{
				{  					 
			         echo"<script>alert('Update Failed!!!')</script>";
					   echo "<script>window.location='update.php';</script>";
				 }
			}
?>
	
	    