<?php 
   include "connection.php";
    
	  $comp = $_POST['compl'];
	  $comp1 = $_POST['compl1'];
	  $tot = $_POST['tor'];
	  $type = $_POST['type'];
      $cot = $_POST['cot'];
      $pers = $_POST['per'];
      $rate = $_POST['rate'];

               $ins = "INSERT into tariff VALUES($comp,$tot,'$type',$cot,$pers,'$rate')";

                 if($conn->query($ins)=== FALSE)
				 {  					 
			         echo"<script>alert('Update Failed!!!')</script>";
					   echo "<script>window.location='update.php';</script>";
				 }
				 
				 else
				 {
					  $_SESSION['compNO']=$comp1;
					  echo"<script>alert('Room added successfully!!!')</script>";
					  
					     echo "<script>window.location='update.php';</script>";
				 }		  
					 
?>					      
					 
				    
				