<?php
include ("connection.php");
?>
`
<!DOCTYPE html>
<html>
<head>
	<title img src="image/logo">Royal Grand Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="image/logo.jpg" type="img/icon" rel="icon">
	</head>
	<body>
		<div id="full">
			<div id="stay" style="background-image: url('image/hotelstay.jpg'); background-size: 100% 900px; width: 100%; height: 900px";>
			<div id="header">
				<div id="logo"><h1><font color="purple">Royal Grand Hotel</font></h1></div>
				<div id="nav">
						<ul>
							<li><a href="http://localhost/Hotel2/" style="color: purple"><b>Home</b></a></li>
							<li><a href="#" style="color: purple"><b>Contact Us</b></a></li>
							<li><a href="#" style="color: purple"><b>Book My Stay</b></a></li>
							<li><a href="#" style="color: purple"><b>About Us</b></a></li>
							<li><a href="#" style="color: purple"><b>Help</b></a></li>
						</ul>
				</div>	
		    </div>   
			<div id="banner"><br><br><br><br><br><br><br><br><br><br><br><br>
				<center><div style="background: rgba(51, 255, 255, 0.8); width: 50%; ">
			<form action="" method="post">		
			<table>
				<h1 style="color:#6600CC; text-align:center;">Admin Login</h1>
				<tr>
				   <td width="50%" height="50%" style="color:#7F00FF; font-size:22px;"><b>Username<b></td>
				   <td width="50%" height="50%"><input style="width: 250px; padding: 10px; border-radius: 5px; background: #ccccff" type="text" name="un" placeholder="Enter Username" title="Enter Username"></td> 
				</tr>
				<tr>
				   <td width="50%" height="50%" style="color:#7F00FF; font-size:22px;"><b>Password<b></td>
				   <td width="50%" height="50%"><input style="width: 250px; padding: 10px; border-radius: 5px; background: #ccccff" type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td> 
				</tr>
				<tr>
					<td colspan="2"><b><input type="submit" name="sub" value="Login" style="width: 150px; height:30px; font-size:18px; background:#9933FF; color:#fff;border-radius: 30px; opacity: 0.8;"><b></td>
				</tr>
			</table>
		</form>
		<?php
		if(isset($_POST['sub']))
		{
		  $un=$_POST['un'];
		  $ps=$_POST['ps'];
		  $q1="select * from admin";
		  $run=mysqli_query($a,$q1);
		  $row=mysqli_fetch_array($run);
		  echo $u=$row['un'];
		  echo $p=$row['ps'];
		  if($un==$u&& $ps==$p)
		  {
		  	header("Location:ahome.php");
		  }
		  else
		  {
		  	header("Location:index.php?Wrong Username");
		  }

		}
		  
		  
		  ?>
		</div></center>
			
			</div>
			<center>

	</div>
	</center>
	</div>	
		<div class="footer-container">
			<div class="footer" >
				<div  class="footer-heading">
					<h4 style="background: black; height: 40px; width: 100%; margin-top: 80px; padding-top: 20px; padding-left: 40px; color: white">Royal Grand Hotel <center>2020@Hotel Management</center></h4>
				</div>
			</div>
			
		</div>

	</body>

</html>