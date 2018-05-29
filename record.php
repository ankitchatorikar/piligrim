<?php
    include "connection.php";
    include "index1.php";
?>
<HTML>
<title>Record of pilgrim</title>
<body>
    <p style="font-size:35px ;margin:30px 10px 30px 550px;font-weight:bold">Pilgrim's Details</p>
	<?php
	     $view = "create view record as select uid,name,gender,email,mobile,address from pilgrim";
         $conn->query($view);
		 
		  $sql = "select * from record";
		  $rs = $conn->query($sql);
		 
		  echo "<table  class='t_data1'>";
		  echo "<tr><th>Aadhar No</th><th>Name</th><th>Gender</th><th>Email-id</th><th>Mobile No.</th><th>Address</th></tr>";
          
           while($v=mysqli_fetch_array($rs))
           {
			    echo "<tr>"; 
			    echo "<td>".$v[0]."</td>";
				echo "<td>".$v[1]."</td>";
				echo "<td>".$v[2]."</td>";
				echo "<td>".$v[3]."</td>";
				echo "<td>".$v[4]."</td>";
				echo "<td>".$v[5]."</td>";
				echo "</tr>";
           }			   
		   echo "</table>";   
	 ?>
	 
	 
     <div>
       <footer class="footer"> Copyright © bhaktaseva, shegaon</footer>
     </div>
</body>
</html>
   