<!DOCTYPE html>
<html>
<head>
	<title img src="image/logo">Royal Grand Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="image/logo.jpg" type="img/icon" rel="icon">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
				$('#nav').slideToggle();

			});
		});
	</script>
	</head>
	<body>
		<div id="full">
			<div style="background-image: url('https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/32/2016/07/27013825/Pool-25.jpg'); width: 100%; height: 900px";>
			<div id="header">
				<div id="logo"><h1><font color="purple">Royal Grand Hotel</font></h1></div>
				<div><button id="btn">|||</button></div>
				<div id="nav">
						<ul>
							<li><a href="#" style="color: purple"><b>Home</b></a></li>
							<li><a href="http://localhost/Hotel2/contactus.php" style="color: purple"><b>Contact Us</b></a></li>
							<li><a href="http://localhost/Hotel2/bookmystay.php" style="color: purple"><b>Book My Stay</b></a></li>
							<li><a href="#" style="color: purple"><b>About Us</b></a></li>
							<li><a href="#" style="color: purple"><b>Help</b></a></li>
						</ul>
				</div>		
		    </div>   
			<div id="banner">
			
			</div>
		</div>

		<div id="f1">
			<form action="registration.php" method="get">
			<form action="http://localhost/Hotel2/registration.php" method="get">
			<center><table>
				<tr>
					<th width="20%" height="50px">City</th>
						
					<th width="20%" height="50px">Check In Date</th>
						
					<th width="20%" height="50px">Check Out Date</th>
						
					<th width="20%" height="50px">Rooms</th>
					<td rowspan="2"><input style="width: 80px; height: 30px; border-radius: 20px; background: white; color: blue; text-align: center;" type="submit" value="Check" name="sub" title="Check"></td>
				</tr>

				<tr>
					<td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter City Name"></center></td>
						
					<td width="20%" height="50px"><center><input type="date" name="coin"></center></td>
						
					<td width="20%" height="50px"><center><input type="date" name="coout"></center></td>
						
					<td width="20%" height="50px"><center>
						<select name="room">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select></center></td>
				</tr>
			</table>
		</center>
	</form>
</form>
		</div>
		<div id="welcome">
			<h1 align="center" style="color: purple; font-family: sans-serif;"><b>Welcome To Royal Grand Hotel</b></h1>
			<p style="text-align: justify; padding-left: 24px; padding-right: 24px;"><font size="4"> Being among the most prominent luxury hotels across the globe, this iconic hotel utilizes its website to highlight a touch of luxury and sophistication. Generally, besides its luxurious appeal and fantastic services, it also features a rather remarkable website. It is a hotel established around the magnificent thermal water site, this luxurious establishment tells a story of how the source was discovered and its exclusive accommodation to all the needs of any willing individual utilizing the distinct history timeline. Users can see the subsequent evolution of the stunning Alpine thermal baths’ infrastructure and area over the past few decades.</font></p>
		</div>
		<div id="g1">
			<h2 align="center" style="color: #4040a1"><b>Our Hotel</b></h2>
			<div id="one"><img src="image/luxuryhotel.jpg" width="100%">
				<p style="text-align: justify;">Our hotel is one of the top ten cliff hotels in the world, is located on the cliffs of the Amalfi Coast. Guests can relax in the panoramic outdoor pool on the hotel’s terrace. There is a Moroccan-style bar where guests can enjoy a glass of champagne. Of course, private kitchen and butler service are included. The elevator descends 200 steps to the beach and can take a private cruise on the hotel to other islands to enjoy the sunshine.</p>
			</div>

			<div id="two"><img src="image/hotelhall.jpg" width="100%" height="360px">
				<p style="text-align: justify;">The legendary interior, comfort and home-like facility is what you’d come to expect from our luxury hotel. The understated elegance lends it a quiet, comforting feel while at the same time not being boring. You won't miss a chance to visit here</p>
			</div>

			<div id="three"><img src="image/hotelexterior.jpg" width="100%" height="360px">
				<p style="text-align: justify;">The Royal Grand Hotel is a remarkably designed coastal resort that features various plush rooms, world-class cuisine, and a stunning infinity pool that overlooks the Gulf, among many other provisions. They treat their clients with a unique blend of personalized services and privacy, effectively allowing them to discover the magnificence of luxury as well as its warm populace.</p>
			</div>
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