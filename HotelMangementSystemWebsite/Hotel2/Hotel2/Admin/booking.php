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
			<h1 style="text-align: center;color: blue;">List of Room Data</h1></div></center>
		
				<div style="background-color: rgba(255,255,255,0.6)">
				<table> 
					<tr>
					<th width="10%" height="50px">Name</th>
					<th width="10%" height="50px">ID No</th>
					<th width="10%" height="50px">Address</th>
					<th width="10%" height="50px">City</th>
					<th width="10%" height="50px">State</th>
					<th width="10%" height="50px">Check-in Date</th>
					<th width="10%" height="50px">Check-out Date</th>
					<th width="10%" height="50px">Members</th> 
					</tr>
					<?php
                 $q1="select * from form";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$name=$row['name'];
                 	$idno=$row['idno'];
                 	$address=$row['address'];
                 	$city=$row['city'];
                   	$state=$row['state'];
                    $coin=$row['coin']; 
                     	$coout=$row['coout']; 
                     	$m=$row['m']; 
                ?>

					
			       <tr>
						<td width="10%" height="50px"><center><?php echo $name; ?></center></td>
						<td width="10%" height="50px"><center><?php echo $idno; ?></center></td>
						<td width="10%" height="50px"><center><?php echo $address; ?></center></td> 
						<td width="10%" height="50px"><center><?php echo $city; ?></center></td> 
						<td width="10%" height="50px"><center><?php echo $state; ?></center></td> 
						<td width="10%" height="50px"><center><?php echo $coin; ?></center></td> 
						<td width="10%" height="50px"><center><?php echo $coout; ?><center></center></td> 
						<td width="10%" height="50px"><center><?php echo $m; ?></td>   
					</tr>
					<?php
				  }
				?>
					
				</table>
			</center>
				

	</div>
	</center>
	</div><br><br><br><br><br><br><br><br><br>			
		<div class="footer-container">
			<div class="footer" >
				<div  class="footer-heading">
					<h4 style="background: black; height: 40px; width: 100%; margin-top: 80px; padding-top: 20px; padding-left: 40px; color: white">Royal Grand Hotel <center>2020@Hotel Management</center></h4>
				</div>
			</div>
			
		</div>

	</body>

</html>