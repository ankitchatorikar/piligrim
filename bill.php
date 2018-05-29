  <html>
<head>
<title>Bill Page</title>
<style>
.body
{
   background:#FEF9E7  ;
}

.bill
{
	border:1px solid gray;
	width:600px;
	margin:20px 0px 0px 400px;
}


</style>
</head>
<body class="body">
	      <table>
 <tr>
 <td>
 <img style="margin:10px 0px 0px 380px;width:88px;height:65px;"src="logo.png"></img>
 </td>
 <td class="title">
 <p style="font-size:19px; font-weight:bold; margin:50px 0px 0px 0px;">Shri Gajanan Maharaj Trust,Shegaon-,dist.-Buldana</H3>
  <H2 style="margin:20px 0px 0px 150px;">Anand Sagar</H1>
 </td>
 </tr>
</table>
<hr>	
       <div class="bill">
	       <h3 style="font-style:italic;text-align:center;font-size:25px;">Acknowledgement</h3>
		   <?php
		       session_start();
			   ?>
		 	  
		     <div style="font-size:20px;;margin:10px 10px 10px 10px;">
			 
             <P style="margin:10PX 0PX 0PX 50PX;font-size:25px"><strong><U>Pilgrim Details</U></strong></p>
			 <p style="margin:20px 0px 0px 150px;">
			 <b>Pilgrim Name:</b>&nbsp; <?php echo $_SESSION['name'];?><br>
			 <b>Address:</b>&nbsp;<?php echo $_SESSION['add']; ?><br>
			 <b>Mobile Number:</b>&nbsp; <?php echo $_SESSION['mob'];?><br>
			 <b>Email-id:</b>&nbsp; <?php echo $_SESSION['email'];?><br>
             </p>
			 
			 
			 
			    <P style="margin:10PX 0PX 0PX 50PX;font-size:25px"><strong><U>Booking Details</U></strong></p>
			   
			   <p style="margin:20px 0px 0px 150px;">
			     <b>Room Type:</b>&nbsp; <?php echo $_SESSION['rtype'];?><br>
			     <b>CheckIn Date:</b>&nbsp;<?php echo $_SESSION['CheckIn'];?><br>
			     <b>Total No Of Pilgrims:</b>&nbsp;<?php echo $_SESSION['tnp'];?><br>
				 <b>Names of All Pilgrim:</b><br>
				    <?php echo $_SESSION['allplig'];?>
             </p>
			 </div>
			      
   		   
    </div>
  
 </body>
 </html>
    