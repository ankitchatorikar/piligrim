<html>
<head>
<title>Reservation</title>
</head>
<body>
   <?php  
        include "index1.php";
	?>

	
<form action="addRes.php" method="POST" name="f1">
<br><br>
<div class="chekin">
<table style=" font-size:25px;" >
<tr>
	<th align=left>Check-in Date   :</th>
	<td>
		 <input class="input_box" type="date" name="cid" max="2018-02-25" ><br>
	</td>
</tr>
<tr></tr>

<tr>
	<th align=left>Total Pilgrims:</th>
	<td><select class="input_box" style="width:50px;"style="width:50px;" name=tnp>
	<?php
	for($i=1;$i<=10;$i++)
	{
		echo "<option value=$i>$i</option>";
	} 
	?>
	</select></td>
</tr>

<tr>
	
	<th align=left>Type   :</th>
	<td>
	<?php
	    include "connection.php";
		echo "<select class='input_box' name=type>";
		$qup="select * from tariff";
		
		$rs=$conn->query($qup);
		while($res=mysqli_fetch_row($rs))
		{
			echo "<option class='input' value='".$res[2]."'>".$res[2]."</option>";
		}
		echo "</select>";
		echo "</td>";
	?>
</tr>


<tr>
    <?php
	    session_start();
		$userr = $_SESSION['usr'];
		include "connection.php";
		$s = "select name,email,mobile,address from pilgrim where username='$userr'";
		$result= $conn->query($s);
		 while($v=mysqli_fetch_array($result))
           {
			     
			    $name = $v[0];
				$email = $v[1];
				$mobie = $v[2];
				$add = $v[3];
				
           }	
                 $_SESSION['name'] = $name;
                 $_SESSION['mob'] = $mobie;
                 $_SESSION['email'] = $email;
				 $_SESSION['add'] = $add;
				 
	   echo"<th align=left>Pilgrim Name   :</th>";
	    echo"<td colspan=4><input class='input_box' type='text' name='Fname' size=50 value='$name' disabled></td>";
         echo" </tr>";
		  
		 echo" <tr>";
		echo"<th align=left>Email   :</th>";
		echo"<td colspan=4><input class='input_box' type='text' name='email' size=50 value='$email' disabled required></td>";
	     echo"</tr>";
           

   
	
	echo"<tr>
		<th align=left>Mobile Number   :</th>
		<td colspan=4><input class='input_box' type='text' name='number' size=15 value='$mobie' disabled required></td>
	</tr>
<tr>
	<th align=left valign=top>Address   :</th>
	<td colspan=4><input class='input' name=address value='$add' disabled rows=5 cols=40></textarea></td>
</tr>";
?>
<tr>
	<th align=left>All Pilgrim Names :</th>
	<td colspan=4><textarea class="input" name=pilg rows=5 cols=40></textarea>
</tr>

<br />
<br />
<tr>
	<td colspan=2 align=center><input class="btton" type="submit" name=s1 value="submit">
	<input class="btton" type=reset name=s2 value="clear"><a href=reservation.php></a></td>
</tr>
</table>
</div>
</form>	

</body>
</html>