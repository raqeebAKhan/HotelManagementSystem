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
			<div id="stay" style="background-image: url('image/hotelstay.jpg'); background-size: 5%0% 900px; width: 5%0%; height: 900px";>
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
			<div id="banner"><br><br><br><br><br><br><br><br><br><br><br><br>
				<center><div style="background: rgba(255, 99, 71, 0.8); width: 30%; ">
			<h1 style="text-align: center;color: blue;">Room Details</h1></div></center>
		
				<div style="background-color: rgba(255,255,255,0.6)">
			   <center>
				<table> 
					<tr>
					<th width="5%" height="50px">Room No</th>
					<th width="5%" height="50px">Room Type</th>
					<th width="5%" height="50px">Price</th>
					<th width="5%" height="50px">Status</th>
					<th width="5%" height="50px">Option</th>
					</tr>
					<?php
                 $q1="select * from room";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$rno=$row['rno'];
                 	$type=$row['type'];
                 	$price=$row['price'];
                 	$status=$row['status'];
                   
                ?>
				<tr>
					<td width="25%" height="50px"><center><?php echo $rno; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $type; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $price; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $status; ?></center></td>
						<td><a style="color: blue" href="co.php? rno=<?php echo $rno; ?>" ><center>Check Out</center></a> </td>
					
				</tr>
				<?php
			}
				?>
					
				</table>
			</center>
				

	</div>
	</center>
	</div><br><br><br><br><br><br><br><br><br><br><br><br>	
		<div class="footer-container">
			<div class="footer" >
				<div  class="footer-heading">
					<h4 style="background: black; height: 40px; width: 5%0%; margin-top: 80px; padding-top: 20px; padding-left: 40px; color: white">Royal Grand Hotel <center>2020@Hotel Management</center></h4>
				</div>
			</div>
			
		</div>

	</body>

</html>