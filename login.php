<html>
<head>
<title>Login form</title>
<script language="javascript" type="text/javascript">
  function fun_val()
  	{
  		var l=document.loginform.username.value;
  		if(l=="")
  		{
  			alert("Please Enter User name");
  			document.loginform.username.focus;
  			return false;
  		}

  		var p=document.loginsell.password.value;
  		if(p=="")
  		{
  			alert("Please Enter Password");
  			document.loginform.password.focus;
  			return false;
  		}
  	}
  </script>
</head>
<?php  
        include "index1.php";
?>
<body>
<div class="login_div">
<form name="loginform" action="loginsession.php" method="post"><TR></tr>
  
  <table font-family = "Georgia" class = "table" width="300" height="150"  align="center" cellpadding="5"cellspacing="5" border="0">
    <tr>
	   <div style="text-align:center;color:green;font-size:20px;";>
          <?php 
          // $remarks=$_GET['remarks'];
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Successful';
          }
          ?>  
        </div></tr>	
    
	<tr>
      <td height="35" colspan="2" align="center"><h3><b>Login Form</b></h3></td>
    </tr>
	
    <tr>
      <td width="170" height="40"  align="right"><b>UserName</b></td>
      <td width="213">
         <input type="text" name="username" style="background" />
     </td>
    </tr>
    <tr>
      <td height="38" align="right"><b>Password</b></td>
      <td>
        <input type="password" name="password" maxlength="8">
        </td>
    </tr>
    <br />
    <tr>
      <td height="48" colspan="2" align="center">
        <input style="margin-left:0px;" class="btton" type="submit"  value="Submit" name="ok" onClick="return fun_val();"/>

        <a href="userinfo.php">
        <br/>New User?</a></td>
    </tr>
  </table>
</form>
</div>
<div>
<footer class="footer"> Copyright © bhaktaseva, shegaon</footer>	
</div>
</body>
</html>