<?php
session_start();
    include "connection.php";
	
	$cid = $_POST['cid'];
	$type =$_POST['type'];
	$tnp = $_POST['tnp'];
	$listpli = $_POST['pilg'];
	/*$name = $_SESSION['name'];
	
	$addre = $_SESSION['add'];
	
	$mobno = $_SESSION['mob'];
	$emaili = $_SESSION['email'];*/
	$user = $_SESSION['username'];
	
	/*$ddiff=floor(strtotime($cod)-strtotime($cid))/86400;
	$_SESSION['datediff']=$ddiff;
	if($ddiff<0)
	{
		$message = "CheckIn Date cant be greater than Checkout Date :()";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='reservation.php';</script>";
	}*/
	
	     /*$date = date("d/m/Y");
	     $ddiff=floor(strtotime($cid)-strtotime($date))/86400;
	  if($ddiff<0)
	  {
		  echo"<script>alert('check-in date incorrect')
		            window.location='reservation.php';
			    </script>";  
	  }*/
	  
	        $val = "select username,cid from reservation where username='$user' AND cid='$cid'";
	        $rs = $conn->query($val);
	         
			  if($rs->num_rows>0)
			  {
				  echo"<script>alert('Booking Already Exist');</script>";
				  echo "<script>window.location='reservation.php';</script>";
			  }
			  else
			  {
	             $sql = "insert into reservation values('','$user','$cid','$type','$tnp','$listpli')";
		         $result = $conn->query($sql);
			  
			     if($result===true)
			    {
				$_SESSION['rtype'] = $type;
				$_SESSION['CheckIn'] = $cid;
				
				
				$_SESSION['tnp'] = $tnp;
				$_SESSION['allplig'] = $listpli;
				
				echo"<script>window.alert('Booking Successful!!!')</script>";
				echo"<script>window.location='bill.php'</script>";
			    }
			  }
	  
			$conn->close();
?>
	 
	     