<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Accomodation</title>
</head>
<body>
<?php
   include "index1.php";
   ?>

<p class="accotext">
   
Shri Gajanan Maharaj Sansthan, Shegaon has a separate and systematic arrangement for accommodating thousound of devotees coming from defferent parts of the country for shree's darshan.
To provide this facility the Sansthan has four Bhakta Niwas (A complex for accommodation complexes;2 of them in Mandir premises and the other four near parking. Adjoining to Hattikhana, i.e. 
place of rest of Sansthan's elephant) 
<br><br>
<img src="a.jpg" class="y"><br></img><br>
In Bhaktaniwas there are attached, common, double bed and deluxe rooms available in great number
as per the requirement.The Sansthan has a unique system for providing accommodation at very large
extent. But here the practice is on 'first come first serve' basis.
<br><br>
<img src="b.jpg" class="y"><br></img><br>
The devotees (three numbers min) from the same family or more than three people are eligible for
the room. A prior permission from the Sansthan is mandatory for the couple to stay in Bhakta Niwas.
At the peak period, an emergency arrangement of 5000 beds is made for devotees in different halls.
The devotees from all the sections of the society can get accommodation in Bhakta Niwas as per the
availability and rules of the Shree Sansthan.
<br><br>
<img src="c.jpg" class="y"><br></img><br>


<?php
     include "connection.php";
     $sql = "select * from tariff";
	 $rs = $conn->query($sql);
	  if(!$rs)
	  {
	      die($sql);
	  }
	  
	      echo "<table class='t_data'>";
		  echo "<caption style='font-size:25px;font-weight:bold;'><u>Room Rates</u></caption>";
		  echo "<tr><th>complex no</th><th>  Total room  </th><th>Room Type</th><th>cot</th><th>Persons</th><th>Donation</th></tr>";
	  
	  while($v=mysqli_fetch_array($rs))
	  {
		  
		  echo "<tr>"; echo "<td>".$v[0]."</td>"; echo "<td>".$v[1]."</td>";echo "<td>".$v[2]."</td>";echo "<td>".$v[3]."</td>";
		  echo "<td>".$v[4]."</td>";echo "<td>".$v[5]."</td>";
		  echo "</tr>";
	  }
	  echo "</table>"
	  ?>
	  <br>

<p class="notice">For Registration click Below</p><br>
<a class="button" href="login.php">Registration</a>
</p>

<div>
<footer class="footer"> Copyright © bhaktaseva, shegaon</footer>	
</div>
</body>
</html> 
