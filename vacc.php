<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<table>
<tr>
<td>
<img style="margin:10px 0px 0px 330px;" class="logo" src="logo.png"></img>
</td>
<td class="title">
<p style="font-size:19px; font-weight:bold; margin:50px 0px 0px 0px;">Shri Gajanan Maharaj Trust,Shegaon-,dist.-Buldana</H3>
  <H1 style="margin:20px 0px 0px 130px;">Anand Sagar</H1>
 </td>
 </tr>
</table>
</div>
<form action="vacc1.php" method="post">
    Enter the Room No.:<input type="text" name="room_no"><br>
	<input style="text-align:center;" type="submit" value="ok">
</form>
    <?php
	    include "connection.php";
		
		$room = $_POST['room_no'];
		$sql="delimiter $$
		      create trigger t1
              after delete
              on person
              for each row
              begin
              insert into piligrimBackup values
			  (OLD.UID int(12) primary key, OLD.Name varchar(50), OLD.Age int(3), OLD.Gender varchar(8), OLD.mobile_no int(10));
              end$$";
	    
		$rs = $conn->query($rs);
		
		$delete = "Delete from reserved where room_no = '$room'  ";
		$sq = $conn->query($delete);
		  
		  header("location:vacc.php?remarks=success");
		
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
	?>
</body>
</html>
           



	
	