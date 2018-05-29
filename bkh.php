<?php
   session_start();
   include "index1.php";
   include "connection.php";
  ?>
<html>
<body>
<div style="height:30px;background: linear-gradient(to left,black,gray);font-size:22px;pading:20px 20px 20px 20px;color:yellow;">
	     <?php 
		 
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
     <tr><td><a href="uacc.php"><img src="back.png" height="48px" width="48px"/></a></td><td><h1 style="margin:50px 0px 0px 570px;"> Booking History</h2></td></tr>
  
  <?php
         
	     $view2 = "create view Hbooking as select username,cid,type,totpil,allpil from reservation";
         $conn->query($view2);
		   $user = $_SESSION['username'];
		  $sql = "select * from Hbooking where username='$user' ";
		  $rs = $conn->query($sql);
		 
		  echo "<table style='margin-top:50px'  class='t_data1'>";
		  echo "<tr><th>Check-In Date</th><th>Room Type</th><th>Total Pilgrims</th><th>Names of Pilgrims</th></tr>";
          
           while($v=mysqli_fetch_array($rs))
           {
			    echo "<tr>"; 
			    echo "<td>".$v[1]."</td>";
				echo "<td>".$v[2]."</td>";
				echo "<td>".$v[3]."</td>";
				echo "<td>".$v[4]."</td>";
				echo "</tr>";
           }			   
		   echo "</table>";   
	 ?>
	 <div style="margin-left:450px;">
	 <a href="reservation.php"><button  class="inside_uacc">New Booking</button></a>
     </div>
<div style="margin-top:130px;">
       <footer class="footer"> Copyright © bhaktaseva, shegaon</footer>
     </div>
</body>
	 </html>  