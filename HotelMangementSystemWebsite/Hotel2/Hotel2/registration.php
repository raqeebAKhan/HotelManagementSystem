<?php
include ("connection.php");
$r=$_GET['room'];
$coin=$_GET['coin'];
$coout=$_GET['coout'];
?>
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
							<li><a href="http://localhost/Hotel2/" style="color: purple"><b>Home</b></a></li>
							<li><a href="http://localhost/Hotel2/contactus.php" style="color: purple"><b>Contact Us</b></a></li>
							<li><a href="http://localhost/Hotel2/bookmystay.php" style="color: purple"><b>Book My Stay</b></a></li>
							<li><a href="#" style="color: purple"><b>About Us</b></a></li>
							<li><a href="#" style="color: purple"><b>Help</b></a></li>
						</ul>
				</div>		
		    </div>
        </div>     
		<div id="regBg" style="background-image: url('image/hotelroom.jpg')"; width=100%; height:1200px;>
			<form action="registration.php" method="post">
			

			<div id="form" style="margin-top: 30px">
			

			<table style="background: rgba(255, 255, 255, 0.5); width: 90%; height: 650px; padding-top: 20px; padding-bottom: 15px; padding-left: 15px; color: #000099">
				<h2 style="color: #000080; margin-left: 240px"><b>Registration Form</b></h2>
				<?php
				  $q1="select * from room where status='unbook'";
                        $run=mysqli_query($a,$q1);
                        $row=mysqli_fetch_array($run);
                        $rno=$row['rno'];
                        $q="select * from room where status='unbook'";
                        $run=mysqli_query($a,$q);
                        $num=mysqli_num_rows($run);
                        $num;
                        if($r<=$num)
                        { 
                        ?>
                        	<tr>
					<td><b>Status</b></td>
					<td><input type="text" name="status"value="Available" disabled="disabled" title="status"></td>
					<tr>
						<td><b>Name</b></td>
						<td><input type="text" name="name" placeholder="Enter Name" title="name"></td>
						<td><b>ID No</b></td>
						<td><input type="text" name="idno" placeholder="Enter ID" title="id"></td>
					</tr>

					<tr>
						<td><b>Address</b></td>
						<td><input type="text" name="address" placeholder="Enter Address" title="address"></td>
					</tr>
					<tr>
						<td><b>City</b></td>
						<td><select name="city"><option>--Select--</option>
							<option>Bangalore</option>
							<option>Delhi</option>
							<option>Mumbai</option>
							<option>Chennai</option>
							<option>Kolkata</option>
							<option>Hyderabad</option>
							<option>Munnar</option>
							<option>Patna</option>
							<option>Jaipur</option>
							<option>Mysore</option>
							<option>Amritsar</option>
							<option>Dehradun</option>
							<option>Chandigarh</option>
							<option>Ludhiana</option></select></td>
					</tr>
						<tr>
						<td><b>State</b></td>
						<td><select name="state"><option>--Select--</option>
							<option>Karnataka</option>
							<option>Delhi</option>
							<option>Maharastra</option>
							<option>Tamil Nadu</option>
							<option>West Bengal</option>
							<option>Andra Pradesh</option>
							<option>Telangana</option>
							<option>Kerala</option>
							<option>Bihar</option>
							<option>Rajasthan</option>
							<option>Uttarkhand</option>
							<option>Punjab</option>
							<option>Himachal Pradesh</option></select></td>
					</tr>
				</tr>
				<tr>
					<td><b>E-mail</b></td>
					<td><input type="text" name="email" placeholder="Enter Email address" title="E-mail"></td>
				</tr>
				<tr>
					<td><b>Check-in Date</b></td>
					<td><input type="text" name="coin" value="<?php echo $coin; ?>" title="Check-in"></td>
				
					<td><b>Check-out Date</b></td>
					<td><input type="text" name="coout"  value="<?php echo $coout; ?>" title="Check-out"></td>
				</tr>
				<tr>
					<td><b>Members</b></td>
					<td><input type="text" name="members" placeholder="Enter Members" title="Members"></td>
				</tr>
                         

                      
				<tr>
					<td>
						<a href="http://localhost/Hotel2/final.php"><td><b><input style="width: 120px; height: 30px; border-radius: 20px; background: white; color: blue" type="submit" name="submit" value="Submit" title="Submit"></b></td></a>
					</td>

				</tr>
				<?php    }
                    else
                    {
                ?>
                           <tr>
					<td >Status</td>
					<td><input type="text" name="Status" value="Not- Available" disabled="disabled" title="Status"></td>
				</tr>          
                <?php
                    }
				?>
				

			</table>
		</form>
		<?php
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$idno=$_POST['idno'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$email=$_POST['email'];
			$coin=$_POST['coin'];
			$coout=$_POST['coout'];
			$m=$_POST['members'];


			if(mysqli_query($a,"insert into form(name,address,city,state,email,coin,coout,m,idno) value('$name','$address','$city','$state','$email','$coin','$coout','$m','$idno')"))
			   {
					mysqli_query($a,"update room set status='Book' where rno=$rno");
					
				
				}

				else
				{
					echo "data not insert";
				}
			}
		?>    </div>
		</div>
	</div>
	</body>

</html>