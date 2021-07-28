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
		<div id="header">
				<div id="logo"><h1><font color="purple">Royal Grand Hotel</font></h1></div>
				<div id="nav">
						<ul>
							<li><a href="ahome.php" style="color: purple"><b>Home</b></a></li>
							<li><a href="room.php" style="color: purple"><b>Room Update</b></a></li>
							<li><a href="booking.php" style="color: purple"><b>Booking List</b></a></li>
							<li><a href="rd.php" style="color: purple"><b>Room Details</b></a></li>
							<li><a href="#" style="color: purple"><b>Help</b></a></li>
						</ul>
				</div>		
		    </div>
        </div>     
		<div id="regBg" style="background-image: url('image/hotelroom.jpg')"; width=100%; height:1200px;>
			<center><div id="form" style="margin-top: 30px">
				<form action="room.php" method="post">
			<table style="background: rgba(255, 255, 255, 0.5); width: 90%; height: 650px; padding-top: 20px; padding-bottom: 15px; padding-left: 15px; color: #000099">
				<h2 style="color: #000080; margin-left: 240px"><b></b></h2>
					<tr>
						<td><b>Room No</b></td>
						<td><input type="text" name="name" placeholder="Enter Room No" title="Enter Room No"></td>
						
					</tr>

					<tr>
						<td><b>Room Type</b></td>
						<td><input type="text" name="typr" placeholder="Enter Room Type" title="Enter Room Type"></td>
						
					</tr>
					<tr>
						<td><b>Room Price</b></td>
						<td><input type="text" name="name" placeholder="Enter Poom Price" title="Enter Room Price"></td>
						
					</tr>
						
				<tr>
					<td>
						<td><b><input style="width: 120px; height: 30px; border-radius: 20px; background: white; color: blue" type="submit" name="submit" value="Submit" title="Submit"></b></td>
					</td>
				</tr>
			</table>
		</form>
		<?php
		if(isset($_POST['submit']))
		{
		  $rno=$_POST['rno'];
		  $type=$_POST['type'];
		  $p=$_POST['price'];
		  if(mysqli_query($a,"insert into room(rno,type,price) values('$rno,'$type',$'p')"))
		  {
		  	echo "data insert";
		  }
		  else
		  {
		  	echo "data not insert";

		  }
		}
	?>

	</div></center>
	</div>
	</body>

</html>