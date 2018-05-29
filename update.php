<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Admin</title>
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
  
  <p style="margin:20px 10px 10px 550px;font-size:25px;"><b>Update Functions</b></p>
     
    <p style="margin:10px 10px 10px 300px;font-size:22px;font-weight:bold;">
	    1. Add the room:
		    <div style="margin-left:450px;font-size:20px;">
			<form name=rupt action="update1.php" method="POST">
			Enter complex no:&nbsp <input style="margin:10px 10px 10px 10px; " class="input_box" type=text name=compl required><br>
			Total Rooms:&nbsp <input style="margin:10px 10px 10px 50px; "class="input_box" type=text name=tor required><br>
			Enter type of room:&nbsp <input style="margin:10px 10px 10px 0px; "class="input_box" type=text name=type required><br>
			Enter No of cot:&nbsp <input style="margin:10px 10px 10px 30px;" class="input_box" type=text name=cot required><br>
			Total persons:&nbsp <input style="margin:10px 10px 10px 45px;" class="input_box" type=text name=per required><br>
			Enter Rate:&nbsp <input style="margin:10px 10px 10px 60px;" class="input_box" type=text name=rate required><br>
			<input style="margin-left:100px;" name=submit type=submit value=submit>
			</form>
			</div></p>
		
     <p style="margin:10px 10px 10px 300px;font-size:22px;font-weight:bold;">		
		2. Update the room:
		        <div style="margin-left:450px;font-size:20px;">
			<form name=rupt action="update2.php" method="POST">
			Enter complex no:&nbsp <input style="margin:10px 10px 10px 10px; " class="input_box" type=text name=compl1 required><br>
			<input style="margin-left:100px;" name=submit type=submit value=submit>
			</form>
			</div>
			
			<p style="margin:10px 10px 10px 300px;font-size:22px;font-weight:bold;">		
		3. Delete the room:
		        <div style="margin-left:450px;font-size:20px;">
			<form name=rupt action="update4.php" method="POST">
			Enter complex no:&nbsp <input style="margin:10px 10px 10px 10px; " class="input_box" type=text name=compl2 required><br>
			
			
			<input style="margin-left:100px;" name=submit type=submit value=submit>
			</form>
			</div>
</body>
</html>