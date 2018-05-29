<html>
<head>
  
</head>
<body>
       <?php include "index1.php"; include "connection.php"; ?>
	   
	   <div style="height:30px;background: linear-gradient(to left,black,gray);font-size:22px;pading:20px 20px 20px 20px;color:yellow;">
	     <?php 
		 session_start();
		 $usrr = $_SESSION['usr'];
		 $s="select name from pilgrim where username='$usrr'";
		 $n=$conn->query($s);
		  while($v=mysqli_fetch_array($n))
		  {
			       $name=$v[0];
		  }
                
		         echo"<tr><td>Logined as:&nbsp$name</td>
				 <td><a style='float:right;color:yellow;text-decoration:none;margin-right:22px'
				 href='login.php'>Logout</a></p></td></tr></div>";?>
		<p style="font-size:30px;margin-left:600px;"><b>WEL-COME</p>
	   <div style="margin-left:450px;">
	   
     <a href="bkh.php"><button  class="inside_uacc" >Booking History</button></a>
	 <a href="reservation.php"><button  class="inside_uacc">New Booking</button></a>
	 </div>
	 <div>
        <footer class="footer"> Copyright © bhaktaseva, shegaon</footer>
     </div>
	<?php;?>
</body>
</html>
