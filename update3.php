<?php 
   include "connection.php";
    session_start();
	  $comp = $_SESSION['compl'];
	  /*$tot = $_POST['tor'];
	  $type = $_POST['type'];
      $cot = $_POST['cot'];
      $pers = $_POST['per'];
      $rate = $_POST['rate'];*/
	 
	  $ntot = $_POST['ntor'];
	  $ntype = $_POST['ntype'];
      $ncot = $_POST['ncot'];
      $npers = $_POST['nper'];
      $nrate = $_POST['nrate'];
          
		   $u = "update tariff set
                T_rooms='$ntot' or type='$ntype' or No_cot='$ncot' or No_persons='$pers' or donation='$nrate'
				where 
				 compl_NO = '$comp' ";
			if($conn->query($u) === TRUE)
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