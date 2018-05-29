
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script language="JavaScript">
function RePasswordValidataion(sPassword,sRePassword)
{
	if(sPassword.toString()!=sRePassword.toString())
	{
		alert("Re-Type Password Has to be same as the Password");
		return false;
	}
	else{return true;}
}
</script>
</head>
<body>
<?php  
        include "index1.php";
	?>
	<p style="text-align:center;font-family:High Tower Text;font-size:23px;font-weight:bold;">
	Note: The devotees must produce the Govt. or any other authentic ID proof while applying for room.<br></p>
<div class="userinfo">
<form name="loginform" action="pilgrim.php" method="post"><TR></tr>
<br />

<table  class = "table1" align="center" width="380"  cellspacing="10" cellpadding="5">
<tr>
	<td><span><strong>Enter username:</strong></span> </td>
    <td width="380"><input class="input_box" type="text" name="username" required></td>
  </tr>
  <tr>
    <td><span><strong>Enter password:</strong></span></td>
    <td><input class="input_box" type="password" name="pwd" maxlength="8" required /></td>
  </tr>
  <tr>
    <td><span><strong>Confirm password:</strong></span></td>
    <td><input class="input_box" type="password" name="password" maxlength="8" onchange="return RePasswordValidataion(document.userinfo.pwd.value,document.userinfo.password.value)"/></td>
  </tr>

   <tr>
		<th align=left>Aadhar Number   :</th>
		<td colspan=4><input class="input_box" type="text" name="uid" size=12 required ></td>
	</tr>
  
	<tr>
		<th align=left>Full Name   :</th>
		<td colspan=4><input class="input_box" type="text" name="name" size=50 required></td>
	</tr>
	<tr>
	
	<tr>
		<th align=left>Gender   :</th>
		<td ><select class="input_box" name="gender">
		<?php
			echo "<option>Male</option>";
			echo "<option>Female</option>";
	    ?>
		</select>
	</tr>
	<tr>
	
	<tr>
	       <th align=left>Age :</th>
	<td><select class="input_box" style="width:50px;" name=age>
	<?php
	for($i=20;$i<=80;$i++)
	{
		echo "<option value=$i>$i</option>";
	} 
	?>
	</select></td>
</tr>
		<th align=left>Email   :</th>
		<td colspan=4><input class="input_box" type="text" name="email" size=50 required></td>
	</tr>
	
	<tr>
		<th align=left>Mobile Number   :</th>
		<td colspan=4><input class="input_box" type="text" name="number" size=15 required></td>
	</tr>
	<tr>
		<th align=left valign=top>Address   :</th>
		<td colspan=4><textarea  name="address" rows=5 cols=40></textarea></td>
	</tr>
</table>
<br />

	<div align="center"><input class="btton1" type="submit" value="Submit" name="OK" align="right" onsubmit="return fun_val()"/>
	<input class="btton1" name="reset" type="reset" value="Reset"/>
</div>
</form>
</div>
<div>
<footer class="footer"> Copyright © bhaktaseva, shegaon</footer>
</div>
</body>
</html>